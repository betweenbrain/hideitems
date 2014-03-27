# Hide Items
An experimental plugin that removes list items from your page buffer before they are rendered by the browser. No more hidden Joomla menus!!!

## Usage

Define a series of lists, consisting of when to fire the plugin and what to remove. List syntax is:

    X:class1,class2,class3;
    X2:class4,class5,class6;
    X3:class1,class3,class5

Where X is the menu item, when being viewed, to fire the plugin, and class is the class of the menu item to remove from the page.

* Be sure that the menu item being viewed is followed by a colon.
* Make sure that each list ends with a semi-colon.

The lists can be on different lines in the textarea, and the last list does not need to end with a semi-colon.

TIP: Use 0: to designate a set of classes to remove from all pages.

Works with both Joomla 2.5 and 3.x+.

Uber crafty regex based on that of http://www.sitepoint.com/forums/showthread.php?655366-Regex-to-replace-li-tags-with-asterisk&s=8b5d43a72a5fe9afff45553861d61a86&p=4481896&viewfull=1#post4481896

## Support
* Please visit the [issues page](https://github.com/betweenbrain/hideitems/issues) for this project.

## Stable Master Branch Policy
The master branch will, at all times, remain stable. Development for new features will occur in branches, and when ready, will be merged into the master branch.

In the event features have already been merged for the next release series, and an issue arises that warrants a fix on the current release series, the developer will create a branch based off the tag created from the previous release, make the necessary changes, package a new release, and tag the new release. If necessary, the commits made in the temporary branch will be merged into master.

## Branch Schema
* __master__:  stable at all times, containing the latest tagged release for Joomla 2.5 and 3.x.
* __develop__: the latest version in development for Joomla 2.5 and 3.x. This is the branch to base all pull requests on.
* __1.5-master__ :  stable at all times, containing the latest tagged release for Joomla 1.5.
* __1.5-develop__: the latest version in development for Joomla 1.5. This is the branch to base all pull requests for Joomla 1.5 on.

## Contributing
Your contributions are more than welcome! Please make all pull requests against the `develop` branch.