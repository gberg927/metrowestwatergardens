<div id="content" class="grid_9">
    <div id="contentArticle">
        <div id="headerLeft">Contact</div>
        <div id="contactForm">
            
            <div id="phone"><b>Phone: </b>(508) 916-1535</div>
            <div id="phone"><b>Email: </b>pondguys@metrowestwatergardens.com</div>
            <br />
            <form action="<?php base_url() ?>contact/mailer" method="post">
                <label for="nameInput">Name: <span id="required">*</span></label>
                <input id ="nameInput" name="name" placeholder="Name" required="required" type="text" />
                <label for="email">Email: <span id="required">*</span></label>
                <input id="email" name="email" type="text" placeholder="Email" required="required" />
                <label for="message">Message: <span id="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>
                <p><span id="required">*</span> indicates a required field</p>
                <input id="submitButton" name="submitted" type="submit" value="Submit" />  
            </form>
        </div>
    </div>
</div>