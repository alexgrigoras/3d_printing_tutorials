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
        <div>Who creates 123D Design?</div><br/>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" checked="checked"/>
            <label for="question-1-answers-A">A) Alias</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B">B) Makerware</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-C">C) Autodesk</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
            <label for="question-1-answers-D">D) Shapeways</label>
        </div>
    </li>
    <br/>
    <li>
        <div>What makes 3d printing superior to other crafting techniques?</div><br/>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A"  checked="checked"/>
            <label for="question-2-answers-A">A) efficiency</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">B) speed</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C">C) quality</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D">D) customization</label>
        </div>
    </li>
    <br/>
    <span <?php if(!$login) echo 'class="disabled_content"'; ?>>
        <li>
            <div>What is it called when I need to move an object in 3d?</div><br/>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-A">A) Move</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-B">B) Push</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-C">C) Translate</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-D">D) Grab</label>
            </div>
        </li>
        <br/>
        <li>
            <div>Which axis determintes if the object is 3d?</div><br/>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-A">A) z</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-B">B) x</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-C">C) y</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-D">D) o</label>
            </div>
        </li>
        <br/>
        <li>
            <div>If I want to quickly make a cup and only use a spline/line to create it. Which tool do I use to make it 3d?</div><br/>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-A">A) Sweep</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-B">B) Loft</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-C">C) Extrude</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-D">D) Revolve</label>
            </div>
        </li>
        <br/>
    </span>
</ol>