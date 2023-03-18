<?php
    include 'templates/header.php';
?>
            <form action="" method="post">
                <fieldset>
                    <legend>Personal Information</legend>
                    <label for="firstname">First Name*</label>
                    <input id="firstname" name="Firstname" type="text" maxlength="25" required />
                    <br>
                    <label for="lastname">Last Name*</label>
                    <input id="lastname" name="Lastname" type="text" maxlength="25" required />
                    <br>
                    <label for="email">Email*</label>
                    <input id="email" name="Email" type="text" maxlength="25" required />
                    <br>
                    Please select the music genre(s) that you like:
                    <br>
                    <input type="checkbox" name="genre" value="classic" id="classic" />
                    <label for="classic">Classic</label>
                    <br>
                    <input type="checkbox" name="genre" value="jazz" id="jazz" />
                    <label for="jazz"> Jazz</label>
                    <br>
                    <input type="checkbox" name="genre" value="blues" id="blues" />
                    <label for="blues">Blues</label>
                    <br>
                    <input type="checkbox" name="genre" value="inst" id="inst" />
                    <label for="inst">Instrumental</label>
                </fieldset>

                <fieldset>
                    <legend>Your Message</legend>
                    <label>How did you hear about us?</label>
                    <select name="source">
                        <option value="web">Our Website</option>
                        <option value="fr">Friends</option>
                        <option value="tv">TV Advertising</option>
                        <option value="oth">Other</option>
                    </select>
                    <br>
                    <label> Would you recommend us to your friends?</label>
                    <input type="radio" name="recommend" checked value="yes" /> Yes
                    <input type="radio" name="recommend" value="no" /> No
                    <input type="radio" name="recommend" value="maybe" /> Maybe
                    <label>Your request:</label>
                    <br>
                    <textarea name="aboutyou" cols="40" rows="5">
                    </textarea>
                    <br>
                    <input type="checkbox" name="signme" checked value="sign" /> Sign me up for email updates
                    <div class="submit">
                        <input type="submit" value="Register" />
                    </div>
                </fieldset>
            </form>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.86333320859!2d-79.39195658450166!3d43.671812079120656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2e0b64e1140d%3A0xd11156503e310196!2sThe+Spa+at+Four+Seasons+Hotel+Toronto!5e0!3m2!1ssl!2sca!4v1519231700735"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
            <?php
    include 'templates/footer.php';
?>