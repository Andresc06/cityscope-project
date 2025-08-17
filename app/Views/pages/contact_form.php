<section id="formPage">  
    <h2>Contact Form</h2>

    <div id="introduction">
        <p>Contact us!! It is very easy, just fill out the following form:</p>
        <div id="msg">
        <!-- This is a blank area for us to talk to the user -->
        <br>
    </div>

    </div>
    <form id="email-form" name="email-form">
        <label for="name-id">Name:</label>
        <input type="text" id="name-id" class="contactInput" name="name" placeholder="e.g. John Smith, Paul Johnson" maxlength="64" autocomplete="off"><br>

        <label for="email-id">Return email:</label>
        <input type="text" id="email-id" class="contactInput" name="email" placeholder="e.g. email@address.com" maxlength="64" autocomplete="off"><br>
        
        <label for="email2-id">Re-enter return email:</label>
        <input type="text" id="email2-id" class="contactInput" name="email2" placeholder="e.g. email@address.com" maxlength="64" autocomplete="off"><br>   
        
        <label for="subject-id">Subject:</label>
        <input type="text" id="subject-id" class="contactInput" name="subject" placeholder="e.g. Feedback, Support, Inquiry" maxlength="64"><br>    
        
        <label for="message-id">Message:</label>
        <input type="textarea" id="message-id" class="contactInput" name="message" placeholder="Your message over here..." maxlength="1000"><br><br>    
        
        <button id="submit-button" type="button">Submit</button>
        <button id="clear-button" type="button">Clear</button>
    </form>
</section>
<script src="/assets/js/contacts.js"></script>