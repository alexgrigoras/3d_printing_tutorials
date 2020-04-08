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
        <div>What is the most important thing you should consider when making something in 3d?</div><br/>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"  checked="checked"/>
            <label for="question-1-answers-A">A) Size</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B">B) Gravity</label>
        </div>
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-C">C) Functionality</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D" />
            <label for="question-1-answers-D">D) Quality</label>
        </div>
    </li>
    <br/>
    <li>
        <div>What is the first thing you should consider when making something in 3d?</div><br/>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A"  checked="checked"/>
            <label for="question-2-answers-A">A) quality</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">B) functionality</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C">C) Price</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D">D) Size</label>
        </div>
    </li>
    <br/>
    <span <?php if(!$login) echo 'class="disabled_content"'; ?>>
        <li>
            <div>What is the file format we export to print?</div><br/>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-A">A) obj</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-B">B) stj</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-C">C) stl</label>
            </div>
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-3-answers-D">D) slt</label>
            </div>
        </li>
        <br/>
        <li>
            <div>What does 3d mean?</div><br/>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-A">A) movies</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-B">B) 3 dimensions</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-C">C) stereoscopic</label>
            </div>
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-4-answers-D">D) computer graphics</label>
            </div>
        </li>
        <br/>
        <li>
            <div>What can be 3d?</div><br/>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A"  checked="checked" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-A">A) computer graphics</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-B">B) movies</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-C">C) sculptures</label>
            </div>
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" <?php if(!$login) echo 'disabled'; ?>/>
                <label for="question-5-answers-D">D) all of the above</label>
            </div>
        </li>
        <br/>
    </span>

</ol>