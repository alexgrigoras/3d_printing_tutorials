<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 22:07
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

<ol>
    <li>
        <div>What is the cause of prints not sticking?</div><br/>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" checked="checked"/>
            <label for="question-1-answers-A">A) Greasy french fries</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B">B) Filament warping or not touching buildplate</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-C">C) Printing too slow</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
            <label for="question-1-answers-D">D) Too much infill</label>
        </div>
    </li>
    <br/>
    <li>
        <div>Which of the following is NOT a method to get filament to stick to print bed?</div><br/>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A"  checked="checked"/>
            <label for="question-2-answers-A">A) use hairspray</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">B) use a brim or raft</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C">C) use superglue</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D">D) use a skirt or glass buildplate</label>
        </div>
    </li>
    <br/>
    <span <?php if(!$login) echo 'class="disabled_content"'; ?>>
        <li>
            <div>If layers are not sticking which is not a solution?</div><br/>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-A">A) Adjust print bed temperature</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-B">B) Adjust temperature inside room</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-C">C) Raise nozzle temperature</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-D">D) Lower nozzle temperature</label>
            </div>
        </li>
        <br/>
        <li>
            <div>Warping prints are caused by.....</div><br/>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-A">A) Print bed not level</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-B">B) Filament not sticking to bed</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-C">C) Print bed not heated</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-D">D) All of the above</label>
            </div>
        </li>
        <br/>
        <li>
            <div>What simple item is used to check the printing bed level?</div><br/>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-A">A) computer paper</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-B">B) notebook paper</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-C">C) construction paper</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-D">D) veneer caliper</label>
            </div>
        </li>
        <br/>
    </span>
</ol>