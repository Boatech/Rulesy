/**
 *  *JS Scripts({0.1(1)}) ~ By Olsen Dev Team ~ V-invalid(0)
 *Copyright 2021-2029 Apaxaa, Inc.(importation from Flowbite Tailwind JS -- Originals JS script)
 * License - https://dev.apaxaa.com/rulsey_dev/builds/current_version
 * for www.flowbite.com | beta.apaxaa.com/open_source/flowbite_use
 * generated dynamically based on request from melody {{stream.Line(interval)}}
**/
/** On page load or when changing themes, best to add inline in `head` to avoid FOUC **/
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }

    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
