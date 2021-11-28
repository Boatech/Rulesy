'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

//! Trax
//! version : 1.0.0
//! author  : Nnamchi Israel
//! license : https://www.apaxaa.com/traxJS/license
//! https://nodomainyet/
(function (root, factory) {
  'use strict';

  if (typeof define === 'function' && define.amd) {
    // AMD + global
    define([], function () {
      return root.annyang = factory(root);
    });
  } else if ((typeof module === 'undefined' ? 'undefined' : _typeof(module)) === 'object' && module.exports) {
    // CommonJS
    module.exports = factory(root);
  } else {
    // Browser globals
    root.trax = factory(root);
  }
})(typeof window !== 'undefined' ? window : undefined, function (root, undefined) {
  'use strict';



  var trax;

  // Get the SpeechRecognition object, while handling browser prefixes
  var SpeechRecognition = root.SpeechRecognition || root.webkitSpeechRecognition || root.mozSpeechRecognition || root.msSpeechRecognition || root.oSpeechRecognition;

  // Check browser support
  // This is done as early as possible, to make it as fast as possible for unsupported browsers
  if (!SpeechRecognition) {
    return null;
  }

  var commandsList = [];
  var recognition;
  var callbacks = {
    start: [],
    error: [],
    end: [],
    soundstart: [],
    result: [],
    resultMatch: [],
    resultNoMatch: [],
    errorNetwork: [],
    errorPermissionBlocked: [],
    errorPermissionDenied: []
  };
  var autoRestart;
  var lastStartedAt = 0;
  var autoRestartCount = 0;
  var debugState = false;
  var debugStyle = 'font-weight: bold; color: #00f;';
  var pauseListening = false;
  var _isListening = false;

  // The command matching code is a modified version of Backbone.Router by Jeremy Ashkenas, under the MIT license.
  var optionalParam = /\s*\((.*?)\)\s*/g;
  var optionalRegex = /(\(\?:[^)]+\))\?/g;
  var namedParam = /(\(\?)?:\w+/g;
  var splatParam = /\*\w+/g;
  var escapeRegExp = /[-{}[\]+?.,\\^$|#]/g;
  var commandToRegExp = function commandToRegExp(command) {
    command = command.replace(escapeRegExp, '\\$&').replace(optionalParam, '(?:$1)?').replace(namedParam, function (match, optional) {
      return optional ? match : '([^\\s]+)';
    }).replace(splatParam, '(.*?)').replace(optionalRegex, '\\s*$1?\\s*');
    return new RegExp('^' + command + '$', 'i');
  };

  // This method receives an array of callbacks to iterate over, and invokes each of them
  var invokeCallbacks = function invokeCallbacks(callbacks) {
    for (var _len = arguments.length, args = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      args[_key - 1] = arguments[_key];
    }

    callbacks.forEach(function (callback) {
      callback.callback.apply(callback.context, args);
    });
  };

  var isInitialized = function isInitialized() {
    return recognition !== undefined;
  };

  // method for logging in developer console when debug mode is on
  var logMessage = function logMessage(text, extraParameters) {
    if (text.indexOf('%c') === -1 && !extraParameters) {
      console.log(text);
    } else {
      console.log(text, extraParameters || debugStyle);
    }
  };

  var initIfNeeded = function initIfNeeded() {
    if (!isInitialized()) {
      annyang.init({}, false);
    }
  };

  var registerCommand = function registerCommand(command, callback, originalPhrase) {
    commandsList.push({ command: command, callback: callback, originalPhrase: originalPhrase });
    if (debugState) {
      logMessage('Command successfully loaded: %c' + originalPhrase, debugStyle);
    }
  };

  var parseResults = function parseResults(results) {
    invokeCallbacks(callbacks.result, results);
    var commandText;
    // go over each of the 5 results and alternative results received (we have set maxAlternatives to 5 above)
    for (var i = 0; i < results.length; i++) {
      // the text recognized
      commandText = results[i].trim();
      if (debugState) {
        logMessage('Speech recognized: %c' + commandText, debugStyle);
      }

      // try and match the recognized text to one of the commands on the list
      for (var j = 0, l = commandsList.length; j < l; j++) {
        var currentCommand = commandsList[j];
        var result = currentCommand.command.exec(commandText);
        if (result) {
          var parameters = result.slice(1);
          if (debugState) {
            logMessage('command matched: %c' + currentCommand.originalPhrase, debugStyle);
            if (parameters.length) {
              logMessage('with parameters', parameters);
            }
          }
          // execute the matched command
          currentCommand.callback.apply(this, parameters);
          invokeCallbacks(callbacks.resultMatch, commandText, currentCommand.originalPhrase, results);
          return;
        }
      }
    }
    invokeCallbacks(callbacks.resultNoMatch, results);
  };

  trax = {
    /**
     * Add commands that trax will respond to. Similar in syntax to init(), but doesn't remove existing commands.
     *
     * #### Examples:
     * ````javascript
     * const commands = {'hello :name': helloFunction, 'howdy': helloFunction};
     * const commands2 = {'hi': helloFunction};
     *
     * trax.addCommands(commands);
     * trax.addCommands(commands2);
     * // trax will now listen for all three commands
     * ````
     *
     * @param {Object} commands - trax that annyang should listen for
     * @method addCommands
     * @see [Commands Object](#commands-object)
     */
    addCommands: function addCommands(commands) {
      var cb;

      initIfNeeded();

      for (var phrase in commands) {
        if (commands.hasOwnProperty(phrase)) {
          cb = root[commands[phrase]] || commands[phrase];
          if (typeof cb === 'function') {
            // convert command to regex then register the command
            registerCommand(commandToRegExp(phrase), cb, phrase);
          } else if ((typeof cb === 'undefined' ? 'undefined' : _typeof(cb)) === 'object' && cb.regexp instanceof RegExp) {
            // register the command
            registerCommand(new RegExp(cb.regexp.source, 'i'), cb.callback, phrase);
          } else {
            if (debugState) {
              logMessage('Can not register command: %c' + phrase, debugStyle);
            }
            continue;
          }
        }
      }
    },

   
    start: function start(options) {
      initIfNeeded();
      options = options || {};
      if (options.paused !== undefined) {
        pauseListening = !!options.paused;
      } else {
        pauseListening = false;
      }
      if (options.autoRestart !== undefined) {
        autoRestart = !!options.autoRestart;
      } else {
        autoRestart = true;
      }
      if (options.continuous !== undefined) {
        recognition.continuous = !!options.continuous;
      }

      lastStartedAt = new Date().getTime();
      try {
        recognition.start();
      } catch (e) {
        if (debugState) {
          logMessage(e.message);
        }
      }
    },

    abort: function abort() {
      autoRestart = false;
      autoRestartCount = 0;
      if (isInitialized()) {
        recognition.abort();
      }
    },

  
    pause: function pause() {
      pauseListening = true;
    },

    resume: function resume() {
      trax.start();
    },

    debug: function debug() {
      var newState = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;

      debugState = !!newState;
    },

  
    setLanguage: function setLanguage(language) {
      initIfNeeded();
      recognition.lang = language;
    },

    
    removeCommands: function removeCommands(commandsToRemove) {
      if (commandsToRemove === undefined) {
        commandsList = [];
      } else {
        commandsToRemove = Array.isArray(commandsToRemove) ? commandsToRemove : [commandsToRemove];
        commandsList = commandsList.filter(function (command) {
          for (var i = 0; i < commandsToRemove.length; i++) {
            if (commandsToRemove[i] === command.originalPhrase) {
              return false;
            }
          }
          return true;
        });
      }
    },

    
    addCallback: function addCallback(type, callback, context) {
      var cb = root[callback] || callback;
      if (typeof cb === 'function' && callbacks[type] !== undefined) {
        callbacks[type].push({ callback: cb, context: context || this });
      }
    },

   removeCallback: function removeCallback(type, callback) {
      var compareWithCallbackParameter = function compareWithCallbackParameter(cb) {
        return cb.callback !== callback;
      };
      // Go over each callback type in callbacks store object
      for (var callbackType in callbacks) {
        if (callbacks.hasOwnProperty(callbackType)) {
          // if this is the type user asked to delete, or he asked to delete all, go ahead.
          if (type === undefined || type === callbackType) {
            // If user asked to delete all callbacks in this type or all types
            if (callback === undefined) {
              callbacks[callbackType] = [];
            } else {
              // Remove all matching callbacks
              callbacks[callbackType] = callbacks[callbackType].filter(compareWithCallbackParameter);
            }
          }
        }
      }
    },

 
    isListening: function isListening() {
      return _isListening && !pauseListening;
    },

    /**
     * Returns the instance of the browser's SpeechRecognition object used by annyang.
     * Useful in case you want direct access to the browser's Speech Recognition engine.
     *
     * @returns SpeechRecognition The browser's Speech Recognizer currently used by annyang
     * @method getSpeechRecognizer
     */
    getSpeechRecognizer: function getSpeechRecognizer() {
      return recognition;
    },

    
    trigger: function trigger(sentences) {
      if (!trax.isListening()) {
        if (debugState) {
          if (!_isListening) {
            logMessage('Cannot trigger while trax is aborted');
          } else {
            logMessage('Speech heard, but trax is paused');
          }
        }
        return;
      }

      if (!Array.isArray(sentences)) {
        sentences = [sentences];
      }

      parseResults(sentences);
    },

    
    init: function init(commands) {
      var resetCommands = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;

      // Abort previous instances of recognition already running
      if (recognition && recognition.abort) {
        recognition.abort();
      }

      // initiate SpeechRecognition
      recognition = new SpeechRecognition();

      // Set the max number of alternative transcripts to try and match with a command
      recognition.maxAlternatives = 5;

      // In HTTPS, turn off continuous mode for faster results.
      // In HTTP,  turn on  continuous mode for much slower results, but no repeating security notices
      recognition.continuous = root.location.protocol === 'http:';

      // Sets the language to the default 'en-US'. This can be changed with annyang.setLanguage()
      recognition.lang = 'en-US';

      recognition.onstart = function () {
        _isListening = true;
        invokeCallbacks(callbacks.start);
      };

      recognition.onsoundstart = function () {
        invokeCallbacks(callbacks.soundstart);
      };

      recognition.onerror = function (event) {
        invokeCallbacks(callbacks.error, event);
        switch (event.error) {
          case 'network':
            invokeCallbacks(callbacks.errorNetwork, event);
            break;
          case 'not-allowed':
          case 'service-not-allowed':
            // if permission to use the mic is denied, turn off auto-restart
            autoRestart = false;
            // determine if permission was denied by user or automatically.
            if (new Date().getTime() - lastStartedAt < 200) {
              invokeCallbacks(callbacks.errorPermissionBlocked, event);
            } else {
              invokeCallbacks(callbacks.errorPermissionDenied, event);
            }
            break;
        }
      };

      recognition.onend = function () {
        _isListening = false;
        invokeCallbacks(callbacks.end);
        // annyang will auto restart if it is closed automatically and not by user action.
        if (autoRestart) {
          // play nicely with the browser, and never restart annyang automatically more than once per second
          var timeSinceLastStart = new Date().getTime() - lastStartedAt;
          autoRestartCount += 1;
          if (autoRestartCount % 10 === 0) {
            if (debugState) {
              logMessage('Speech Recognition is repeatedly stopping and starting. See http://is.gd/annyang_restarts for tips.');
            }
          }
          if (timeSinceLastStart < 1000) {
            setTimeout(function () {
              annyang.start({ paused: pauseListening });
            }, 1000 - timeSinceLastStart);
          } else {
            annyang.start({ paused: pauseListening });
          }
        }
      };

      recognition.onresult = function (event) {
        if (pauseListening) {
          if (debugState) {
            logMessage('Speech heard, but annyang is paused');
          }
          return false;
        }

        // Map the results to an array
        var SpeechRecognitionResult = event.results[event.resultIndex];
        var results = [];
        for (var k = 0; k < SpeechRecognitionResult.length; k++) {
          results[k] = SpeechRecognitionResult[k].transcript;
        }

        parseResults(results);
      };

      // build commands list
      if (resetCommands) {
        commandsList = [];
      }
      if (commands.length) {
        this.addCommands(commands);
      }
    }
  };

  return trax;
});
