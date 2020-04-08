/*------------------
 Calculator functions
  ------------------*/
function calculate_step_mm_xy(){
    var motor_step = parseFloat(document.getElementById("motor_step_xy").value);
    var microstepping = parseFloat(document.getElementById("microstepping_xy").value);
    var pulley_tooth = parseFloat(document.getElementById("pulley_tooth_xy").value);
    var belt_pitch = parseFloat(document.getElementById("belt_pitch_xy").value);

    var result = (motor_step * microstepping) / (belt_pitch * pulley_tooth);

    document.getElementById("table_result_xy").innerHTML = parseInt(result);
    document.getElementById("table_motor_step_xy").innerHTML = motor_step;
    document.getElementById("table_microstepping_xy").innerHTML = microstepping;
    document.getElementById("table_pulley_tooth_xy").innerHTML = pulley_tooth;
    document.getElementById("table_belt_pitch_xy").innerHTML = belt_pitch;
}

function calculate_step_mm_z(){
    var motor_step = parseFloat(document.getElementById("motor_step_z").value);
    var microstepping = parseFloat(document.getElementById("microstepping_z").value);
    var thread_pitch = parseFloat(document.getElementById("thread_pitch_z").value);

    var result = (motor_step * microstepping) / thread_pitch;

    document.getElementById("table_result_z").innerHTML = parseInt(result);
    document.getElementById("table_motor_step_z").innerHTML = motor_step;
    document.getElementById("table_microstepping_z").innerHTML = microstepping;
    document.getElementById("table_thread_pitch_z").innerHTML = thread_pitch;
}

function calculate_step_mm_e(){
    var motor_step = parseFloat(document.getElementById("motor_step_e").value);
    var microstepping = parseFloat(document.getElementById("microstepping_e").value);
    var bs_gear = parseFloat(document.getElementById("bs_gear_e").value);
    var hob_diameter = parseFloat(document.getElementById("hob_diameter_e").value);

    var result = (motor_step * microstepping * bs_gear) / hob_diameter;

    document.getElementById("table_result_e").innerHTML = parseInt(result);
    document.getElementById("table_motor_step_e").innerHTML = motor_step;
    document.getElementById("table_microstepping_e").innerHTML = microstepping;
    document.getElementById("table_bs_gear_e").innerHTML = bs_gear;
    document.getElementById("table_hob_diameter_e").innerHTML = hob_diameter;
}

/*

 */
/*------------------
  Scroll top button
  ------------------*/
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var myElem = document.getElementById('myBtn');
    if (myElem !== null) {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/*------------------
     GCODE Hint
  ------------------*/
function showHint(str) {
    var xhttp;
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "utility_files/getgcode.php?q="+str, true);
    xhttp.send();
}