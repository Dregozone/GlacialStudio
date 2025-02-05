<div>
    <form action="{{ route('contact') }}" method="post" autocomplete="off">
        @csrf

        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" class="form-control contactInput" id="name" name="name" placeholder="Enter your name" value="" /> 
        </div>

        <div class="form-group">
            <label for="email">Your email</label>
            <input type="email" class="form-control contactInput" id="email" name="email" placeholder="Enter your email" value="" /> 
        </div>

        <div class="form-group">
            <label for="reason">Reason for contact</label>
            <select class="form-control contactInput" id="reason" name="reason">
                <option value="none">-- Please select --</option>
                <option value="quote">Request a Quote</option>
                <option value="query">Ask a question</option>
            </select> 
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control contactInput" id="message" name="message" placeholder="Enter your message"></textarea> 
        </div>

        <div class="form-group" title="Contact form is currently disabled" style="cursor: not-allowed;">
            <input type="submit" class="btn callToAction fading" id="submitButton" value="Send" disabled /> 
        </div>
    </form>
</div>
