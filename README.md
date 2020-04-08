# 3D Printing Website

## Description
The site is built to learn some information about a particular one domain, which contains tutorials, tests and various tools to facilitate understanding of the notions from this field, focusing on the practice, through interactive videos.

## Supported devices
The site is a responsive one, which means that it is it can adapt depending on the device and its resolution. It was also tested on systems desktop, laptop, tablet and mobile phone.

## Structure
- Home: General information about the site presented in the form of images, text and links to useful pages, but also the necessary steps to introduce yourself in this field.

- Tutorials:
    - 3D printing, introductory notions: Basic notions about the field of 3D printing, with reference to complete articles on other sites or explanatory videos.

    - Building a 3D printer: Building a 3D printer: The steps required to build a 3D Printer using a kit of parts that can be purchased from any specialty store.

    - Information about G-Code commands: Detailed description of common codes and their use (utility, arguments).

- Tests for the validation of knowledge: A number of 3 tests for testing the knowledge about this field, after completing the tutorials: A number of 3 tests for testing the knowledge about this field, after follow the tutorials.

- Useful tools for this field:
    - G-Code interpreter (uploading a file to the site, interpreting it and detailed display of the commands used)
    - Data calculator needed to configure the 3D printer firmware (travel step for XY axes, Y axis and Z axis):
    - G-Code order information (order entry and immediate display of possible orders and their usefulness)
    - Authentication / logout interface (to access the site functionalities)

## Technologies used
- HTML -> creating the structure of the website
- CSS -> improving the look and creating a responsive structure
- Javascript -> useful tools for 3d printing configurations and top of the page button
- PhP -> verification tests, gcode interpreter and logging system (with sessions)
- Ajax -> asynchronous communication with the server for displaying gcode commands
