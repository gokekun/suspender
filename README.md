# The simple suspender
Google blocked [The Great Suspender](https://chrome.google.com/webstore/detail/the-great-suspender/klbibkeccnjlkjkiokjodocebajanakg "The Great Suspender") (this link isn't working anymore) extension from Chrome, with existing users now receiving a message that it has “been disabled because it contains malware.

The Great Suspender was a quite useful extension for keeping my browser running smoothly given the number of opened tabs that I always left open, without actually forcing you to close old tabs.

![The simple suspender](https://vjj.sugimoto.com.br/s/suspender.png "The simple suspender")

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

## Install
1. Upload index.php to your server.
2. Edit the bookmarklet and add to your browser.

## Usage
1. Click on the bookmarklet on the page that you want to suspend.
2. To reopen, click on the link created on the suspended page.

![](https://vjj.sugimoto.com.br/s/video.gif)

## Issues to be addressed
1. **This solution is not automatic**: If you want to automate, feel free to edit the code and find a solution of your own, it may be worth to check [Chrome DevTools on running snippets of javaScript on any page](https://developers.google.com/web/tools/chrome-devtools/javascript/snippets "Chrome DevTools on running snippets of javaScript on any page").
2. **I'm not a developer.** I barely know what I'm doing, I googled and wrote the code above. If you have a better solutions, I'm all ears.
