An experimental plugin that removes list items from your page buffer before they are rendered by the browser. No more is the day of hidden Joomla menus!!!

 To use:

 Define a series of lists, consisting of when to fire the plugin and what to remove. List syntax is:

    X:class1,class2,class3;
    X2:class4,class5,class6;
    X3:class1,class3,class5

Where X is the menu item, when being viewed, to fire the plguin, and class is the class of the menu item to remove from the page.

* Be sure that the menu item being viewed is followed by a colon.
* Make sure that each list ends with a semi-colon.

The lists can be on different lines in the textarea, and the last list does not need to end with a semi-colon.

TIP: Use 0: to deginate a set of classes to remove from all pages.

Tricky, eh?

Oh yeah, it only works with Joomla 1.5 at the moment.

Credits:

Uber crafty regex based on that of http://www.sitepoint.com/forums/showthread.php?655366-Regex-to-replace-li-tags-with-asterisk&s=8b5d43a72a5fe9afff45553861d61a86&p=4481896&viewfull=1#post4481896