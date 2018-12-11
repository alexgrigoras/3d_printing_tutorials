<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 22:05
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if( isset($_SESSION['valid']) &&  $_SESSION['valid'] == true) {
    $login = true;
}
else {
    $login = false;
}

?>

<section class="first_container">
    <section class="first_container_wrapper">

        <?php
        if(!$login) {
            ?>
            <h2>Va rugam sa va logati pentru a avea acces la calculatoare!</h2>
            <?php
        }
        ?>

        <form class = "calculator_container">
            <div id="calculator_title">Steps per millimeter - XY steps</div>

            <article id="calculator_container_inline">
                <article class="calculator_row">
                    <p id="calc_op_name">Motor step angle</p>
                    <select id="motor_step_xy" onchange="calculate_step_mm_xy()"
                        <?php if(!$login) echo 'disabled'; ?>>
                        <option value="200">1.8&deg; (200 per revolution)</option>
                        <option value="400">0.9&deg; (400 per revolution)</option>
                        <option value="48">7.5&deg; (48 per revolution)</option>
                    </select>
                    <p id="calc_op_name">Belt Pitch (in mm)</p>
                    <input type="number" onchange="calculate_step_mm_xy()" id="belt_pitch_xy" value="2" size="5"
                        <?php if(!$login) echo 'disabled'; ?>>
                </article>
                <article class="calculator_row">
                    <p id="calc_op_name">Driver microstepping</p>
                    <select id="microstepping_xy" onchange="calculate_step_mm_xy()"
                        <?php if(!$login) echo 'disabled'; ?>>
                        <option value="1">1 - full step</option>
                        <option value="2">1/2 - half step</option>
                        <option value="4">1/4 - quarter step</option>
                        <option value="8">1/8 - uStep (Gen6)</option>
                        <option value="16">1/16 - uStep (SB)</option>
                        <option value="32">1/32 - uStep (CrazySB)</option>
                    </select>
                    <p id="calc_op_name">Pulley tooth count</p>
                    <input type="number" id="pulley_tooth_xy" onchange="calculate_step_mm_xy()" value="8" size="5"
                        <?php if(!$login) echo 'disabled'; ?>>
                </article>
            </article>
            <br/>
            <hr>
            <table class="result_table">
                <tr class="result_l">
                    <td width="30%" class="result_c">Result</td>
                    <td>Teeth</td>
                    <td>Step angle</td>
                    <td>Stepping</td>
                    <td>Belt</td>
                </tr>
                <tr class="result_l">
                    <td id="table_result_xy"></td>
                    <td id="table_pulley_tooth_xy"></td>
                    <td id="table_motor_step_xy"></td>
                    <td id="table_microstepping_xy"></td>
                    <td id="table_belt_pitch_xy"></td>
                </tr>
            </table>
        </form>

        <form class = "calculator_container">
            <div id="calculator_title">Steps per millimeter - Z steps</div>

            <article id="calculator_container_inline">
                <article class="calculator_row">
                    <p id="calc_op_name">Motor step angle</p>
                    <select id="motor_step_z" onchange="calculate_step_mm_z()"
                        <?php if(!$login) echo 'disabled'; ?>>
                        <option value="200">1.8&deg; (200 per revolution)</option>
                        <option value="400">0.9&deg; (400 per revolution)</option>
                        <option value="48">7.5&deg; (48 per revolution)</option>
                    </select>
                    <p id="calc_op_name">Thread Pitch (in mm)</p>
                    <input type="number" onchange="calculate_step_mm_z()" id="thread_pitch_z" value="2" size="5"
                        <?php if(!$login) echo 'disabled'; ?>>
                </article>
                <article class="calculator_row">
                    <p id="calc_op_name">Driver microstepping</p>
                    <select id="microstepping_z" onchange="calculate_step_mm_z()"
                        <?php if(!$login) echo 'disabled'; ?>>
                        <option value="1">1 - full step</option>
                        <option value="2">1/2 - half step</option>
                        <option value="4">1/4 - quarter step</option>
                        <option value="8">1/8 - uStep (Gen6)</option>
                        <option value="16">1/16 - uStep (SB)</option>
                        <option value="32">1/32 - uStep (CrazySB)</option>
                    </select>
                </article>
            </article>
            <br/>
            <hr>
            <table class="result_table">
                <tr>
                    <td width="30%">Result</td>
                    <td>Step angle</td>
                    <td>Stepping</td>
                    <td>Thread</td>
                </tr>
                <tr>
                    <td id="table_result_z"></td>
                    <td id="table_motor_step_z"></td>
                    <td id="table_microstepping_z"></td>
                    <td id="table_thread_pitch_z"></td>
                </tr>
            </table>
        </form>

        <form class = "calculator_container">
            <div id="calculator_title">Steps per millimeter - E steps</div>

            <article id="calculator_container_inline">
                <article class="calculator_row">
                    <p id="calc_op_name">Motor step angle</p>
                    <select id="motor_step_e" onchange="calculate_step_mm_e()"
                        <?php if(!$login) echo 'disabled'; ?>>
                        <option value="200">1.8&deg; (200 per revolution)</option>
                        <option value="400">0.9&deg; (400 per revolution)</option>
                        <option value="48">7.5&deg; (48 per revolution)</option>
                    </select>
                    <p id="calc_op_name">Big/Small Gear Teeth</p>
                    <input type="number" onchange="calculate_step_mm_e()" id="bs_gear_e" value="5" size="5"
                        <?php if(!$login) echo 'disabled'; ?>>
                </article>
                <article class="calculator_row">
                    <p id="calc_op_name">Driver microstepping</p>
                    <select id="microstepping_e" onchange="calculate_step_mm_e()"
                        <?php if(!$login) echo 'disabled'; ?>>
                        <option value="1">1 - full step</option>
                        <option value="2">1/2 - half step</option>
                        <option value="4">1/4 - quarter step</option>
                        <option value="8">1/8 - uStep (Gen6)</option>
                        <option value="16">1/16 - uStep (SB)</option>
                        <option value="32">1/32 - uStep (CrazySB)</option>
                    </select>
                    <p id="calc_op_name">Hob Effective Diameter</p>
                    <input type="number" id="hob_diameter_e" onchange="calculate_step_mm_e()" value="7" size="5"
                        <?php if(!$login) echo 'disabled'; ?>>
                </article>
            </article>
            <br/>
            <hr>
            <table class="result_table">
                <tr>
                    <td width="25%">Result</td>
                    <td>Gear ratio</td>
                    <td>Step angle</td>
                    <td>Stepping</td>
                    <td>Hob</td>
                </tr>
                <tr>
                    <td id="table_result_e"></td>
                    <td id="table_bs_gear_e"></td>
                    <td id="table_motor_step_e"></td>
                    <td id="table_microstepping_e"></td>
                    <td id="table_hob_diameter_e"></td>
                </tr>
            </table>
        </form>

    </section>
</section>

<script>
    window.onload=calculate_step_mm_xy();
    window.onload=calculate_step_mm_z();
    window.onload=calculate_step_mm_e();
</script>
<br/><br/>
<br/>
<section class='break_container'>
    <br/><br/><br/>
</section>