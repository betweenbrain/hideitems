An experimental plugin that removes list items from your page buffer befoe it is rendered by the browser. No more is the day of hidden menus.

 To use:

1. Set the menu item contexts under which this plugin will fire. For exmaple, a Contexts setting of `1,2` will fire the pluginonly when the user is visiting menu items 1 and 2.

2. Define the classes of list ites to remove. A List Item Classes setting of `item37,item41,item50,item48,item27,item49|item37,item27,item1` will:

- Remove item37,item41,item50,item48,item27,item49 when the user is viewing menu item 1

- Remove item37,item27,item1 when viewing menu item 2.

Tricky, eh?

Oh yeah, it only works with Joomla 1.5 at the moment.

Credits:

Uber crafty regex based on that of http://www.sitepoint.com/forums/showthread.php?655366-Regex-to-replace-li-tags-with-asterisk&s=8b5d43a72a5fe9afff45553861d61a86&p=4481896&viewfull=1#post4481896