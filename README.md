# Moodle - local_disablerightclick

Disable Right Click plugin helps you to protect your site's content from being reused.

### Description

Moodle plugin that provide protection by prevent moodle website content from being selected, copied and reused
or other actions that can violate the site's content.

### Tested

![Moodle33](https://img.shields.io/badge/moodle-3.3-green.svg)
![Moodle39](https://img.shields.io/badge/moodle-3.9-green.svg)
![Moodle42](https://img.shields.io/badge/moodle-4.2-green.svg)
![PHP8.2](https://img.shields.io/badge/PHP-8.2-blue.svg)

### Features

- Protect your content from selection and copy. this plugin makes content protection your extremely simple without
  yelling at your readers.
- Disable right click on images to prevent downloading. No one can save images from your site.
- Disable right-click on the web page to copy content from any page.
- Disable keyboard shortcuts: Select All (Ctrl+A), Cut (Ctrl+X), Copy (Ctrl+C), Save (Ctrl+S), Paste (ctrl+V), Inspect (
  Ctrl+Shift+I), View-source (Ctrl+U).(More shortcuts will be added soon)
- Work with any themes.
- Work well on mobile devices.
- Compatible with Chrome and Firefox. (Soon will be compatible with Safari)
- Easy to install and use.
- Configure as your requirement. Following settings are available:
- Disable Right Click.
- Disable Cut, Copy and Paste.
- Disable Developer Tools.
- Disable mouse selection.

### Installation

1. Copy this plugin to the `local\disablerightclick` folder on the server
2. Login as administrator
3. Go to Site Administrator > Notification
4. Install the plugin
5. You will need to fill out the settings.

#### Requirements

* Min. required: Moodle 3.3.x
* Supports PHP: 7.4

## Changelog

### 4.2.0 (2023091800):

- Implement support for moodle 4.2 and php 8.2.

### 3.9.0 (2020081500):

- Add disable mouse selection option.
- Reformat plugins documentation.
- Improve coding style to meet exactly the Moodle standards.
- Added support to iframe. Now you can disable right click and more on iframe.
- Fixed js error when course or category is deleted.
- Fixed switch user role issue. Disabling will work properly when user role is switched.
- Fixed js issue when cache is disabled.
- Added page url list setting to allow functionality on specific pages
- Using checking capability to check admin and manager role.
- Using capability to allow or disallow.
- Protect your content from selection and copy.
  this plugin makes content protection your extremely simple without yelling at your readers.
- Disable right click on images to prevent downloading. No one can save images from your site.
- Disable right-click on the web page to copy content from any page.
- Disable keyboard shortcuts: Select All (Ctrl+A), Cut (Ctrl+X), Copy (Ctrl+C), Save (Ctrl+S),
  Paste (ctrl+V), Inspect (Ctrl+Shift+I), View-source (Ctrl+U).(More shortcuts will be added soon)
- Work with any themes.
- Work well on mobile devices.
- Compatible with Chrome and Firefox. (Soon will be compatible with Safari)
- Easy to install and use.
- Configure as your requirement. Following settings are available:
- Disable Right Click
- Disable Cut, Copy and Paste
- Disable Developer Tools

### Author

* Hamza Tamyachte :: [Ldesign Media](https://ldesignmedia.nl/) - [luuk@ldesignmedia.nl](luuk@ldesignmedia.nl)
