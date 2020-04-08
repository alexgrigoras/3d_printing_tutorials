<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 07.01.2018
 * Time: 13:22
 */

// Array with commands
$a[] = "G0-G1: Linear Move";
$a[] = "G2-G3: Controlled Arc Move";
$a[] = "G4: Dwell";
$a[] = "G5: Bézier cubic spline";
$a[] = "G10: Retract";
$a[] = "G11: Recover";
$a[] = "G12: Clean the Nozzle";
$a[] = "G20: Inch Units";
$a[] = "G21: Millimeter Units";
$a[] = "G26: Mesh Validation Pattern";
$a[] = "G27: Park the nozzle";
$a[] = "G28: Auto Home";
$a[] = "G29: Mesh Bed Leveling";
$a[] = "G29: Automatic Bed Leveling";
$a[] = "G29: Unified Bed Leveling";
$a[] = "G30: Single Z-Probe";
$a[] = "G31: Dock Sled";
$a[] = "G32: Undock Sled";
$a[] = "G33: Delta Auto Calibration";
$a[] = "G38.2-G38.3: Probe target";
$a[] = "G90: Absolute Positioning";
$a[] = "G91: Relative Positioning";
$a[] = "G92: Set Position";
$a[] = "M0-M1: Unconditional stop";
$a[] = "M3: Spindle CW / Laser On";
$a[] = "M4: Spindle CCW / Laser On";
$a[] = "M5: Spindle / Laser Off";
$a[] = "M17: Enable Steppers";
$a[] = "M18-M84: Disable steppers";
$a[] = "M20: List SD Card";
$a[] = "M21: Init SD card";
$a[] = "M22: Release SD card";
$a[] = "M23: Select SD file";
$a[] = "M24: Start or Resume SD print";
$a[] = "M25: Pause SD print";
$a[] = "M26: Set SD position";
$a[] = "M27: Report SD print status";
$a[] = "M28: Start SD write";
$a[] = "M29: Stop SD write";
$a[] = "M30: Delete SD file";
$a[] = "M31: Print time";
$a[] = "M32: Select and Start";
$a[] = "M33: Get Long Path";
$a[] = "M34: SDCard Sorting";
$a[] = "M42: Set Pin State";
$a[] = "M43: Debug Pins";
$a[] = "M48: Probe Accuracy Test";
$a[] = "M75: Start Print Job";
$a[] = "M76: Pause Print Job";
$a[] = "M77: Stop Print Job";
$a[] = "M78: Print Job Stats";
$a[] = "M80: Power On";
$a[] = "M81: Power Off";
$a[] = "M82: E Absolute";
$a[] = "M83: E Relative";
$a[] = "M85: Inactivity Shutdown";
$a[] = "M92: Set Axis Steps-per-unit";
$a[] = "M100: Free Memory";
$a[] = "M104: Set Hotend Temperature";
$a[] = "M105: Report Temperatures";
$a[] = "M106: Set Fan Speed";
$a[] = "M107: Fan Off";
$a[] = "M108: Break and Continue";
$a[] = "M109: Wait for Hotend Temperature";
$a[] = "M110: Set Line Number";
$a[] = "M111: Debug Level";
$a[] = "M112: Emergency Stop";
$a[] = "M113: Host Keepalive";
$a[] = "M114: Get Current Position";
$a[] = "M115: Firmware Info";
$a[] = "M117: Set LCD Message";
$a[] = "M119: Endstop States";
$a[] = "M120: Enable Endstops";
$a[] = "M121: Disable Endstops";
$a[] = "M122: TMC Debugging";
$a[] = "M125: Park Head";
$a[] = "M126: Baricuda 1 Open";
$a[] = "M127: Baricuda 1 Close";
$a[] = "M128: Baricuda 2 Open";
$a[] = "M129: Baricuda 2 Close";
$a[] = "M140: Set Bed Temperature";
$a[] = "M145: Set Material Preset";
$a[] = "M149: Set Temperature Units";
$a[] = "M150: Set RGB Color";
$a[] = "M155: Temperature Auto-Report";
$a[] = "M163: Set Mix Factor";
$a[] = "M164: Save Mix";
$a[] = "M165: Set Mix";
$a[] = "M190: Wait for Bed Temperature";
$a[] = "M200: Set Filament Diameter";
$a[] = "M201: Set Print Max Acceleration";
$a[] = "M203: Set Max Feedrate";
$a[] = "M204: Set Starting Acceleration";
$a[] = "M205: Set Advanced Settings";
$a[] = "M206: Set Home Offsets";
$a[] = "M207: Set Firmware Retraction";
$a[] = "M208: Set Firmware Recovery";
$a[] = "M209: Set Auto Retract";
$a[] = "M211: Software Endstops";
$a[] = "M218: Set Hotend Offset";
$a[] = "M220: Set Feedrate Percentage";
$a[] = "M221: Set Flow Percentage";
$a[] = "M226: Wait for Pin State";
$a[] = "M240: Trigger Camera";
$a[] = "M250: LCD Contrast";
$a[] = "M260: I2C Send";
$a[] = "M261: I2C Request";
$a[] = "M280: Servo Position";
$a[] = "M290: Babystep";
$a[] = "M300: Play Tone";
$a[] = "M301: Set Hotend PID";
$a[] = "M302: Cold Extrude";
$a[] = "M303: PID autotune";
$a[] = "M304: Set Bed PID";
$a[] = "M350: Set micro-stepping";
$a[] = "M351: Set Microstep Pins";
$a[] = "M355: Case Light Control";
$a[] = "M360: SCARA Theta A";
$a[] = "M361: SCARA Theta-B";
$a[] = "M362: SCARA Psi-A";
$a[] = "M363: SCARA Psi-B";
$a[] = "M364: SCARA Psi-C";
$a[] = "M380: Activate Solenoid";
$a[] = "M381: Deactivate Solenoids";
$a[] = "M400: Finish Moves";
$a[] = "M401: Deploy Probe";
$a[] = "M402: Stow Probe";
$a[] = "M404: Set Filament Diameter";
$a[] = "M405: Filament Width Sensor On";
$a[] = "M406: Filament Width Sensor Off";
$a[] = "M407: Filament Width";
$a[] = "M410: Quickstop";
$a[] = "M420: Bed Leveling State";
$a[] = "M421: Set Mesh Value";
$a[] = "M428: Home Offsets Here";
$a[] = "M500: Save Settings";
$a[] = "M501: Restore Settings";
$a[] = "M502: Factory Reset";
$a[] = "M503: Report Settings";
$a[] = "M540: Endstops Abort SD";
$a[] = "M600: Filament Change";
$a[] = "M605: Dual Nozzle Mode";
$a[] = "M665: Delta Configuration";
$a[] = "M666: Coming Soon";
$a[] = "M851: Z Probe Offset";
$a[] = "M852: Bed Skew Compensation";
$a[] = "M900: Linear Advance Factors";
$a[] = "M906: TMC Motor Current";
$a[] = "M907: Set Motor Current";
$a[] = "M908: Set Trimpot Pins";
$a[] = "M909: DAC Print Values";
$a[] = "M910: Commit DAC to EEPROM";
$a[] = "M911: TMC OT Pre-Warn Condition";
$a[] = "M912: Clear TMC OT Pre-Warn";
$a[] = "M913: Set Hybrid Threshold Speed";
$a[] = "M914: TMC Bump Sensitivity";
$a[] = "M928: Start SD Logging";
$a[] = "M999: STOP Restart";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = "<li>" . $name . "</li>";
            } else {
                $hint .= "<li>" . $name . "</li>";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>