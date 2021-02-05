# The simple suspender
Google blocked [The Great Suspender](https://chrome.google.com/webstore/detail/the-great-suspender/klbibkeccnjlkjkiokjodocebajanakg "The Great Suspender") (this link isn't working anymore) extension from Chrome, with existing users now receiving a message that it has “been disabled because it contains malware.

The Great Suspender was a quite useful extension for keeping my browser running smoothly given the number of opened tabs that I always left open, without actually forcing you to close old tabs.

## A simple and temporary solution

This solution is a very simple one that I found to solve my problem for now. It is a php file that get's the url and create a simple and low ram consumption page.

It uses a simple Bookmarklet that gets the page title and url, encode them and open your PHP file using these data as queries.

The Javascript:

    javascript: function(){
    	var a=encodeURIComponent(document.title);
    	var b=encodeURIComponent(window.location.href);
    	window.open("YOUR_URL_HERE/?title="+a+"%26url="+b,"_self")
    }();

The bookmarklet:

    javascript:void function(){var a=encodeURIComponent(document.title),b=encodeURIComponent(window.location.href);window.open("YOUR_URL_HERE/%3Ftitle="+a+"%26url="+b,"_self")}();

