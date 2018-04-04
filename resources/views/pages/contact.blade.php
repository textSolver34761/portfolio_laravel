@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <h1>Contact me </h1>
    <form method="post" action="https://formspree.io/pradonbenjamin@gmail.com"id="my-form-element" cf-form>
      <fieldset>
        <label for="name">What's your name?*</label> <br>
        <input required cf-questions="Hi there! What's your name? 😊" type="text" class="form-control" name="name" id="name" />
      </fieldset>
    
      <fieldset>
        <label for="occupation">What's your occupation?</label> <br>
        <div class="radio">
                <label>
                  <input cf-questions="Great to meet you, {previous-answer}! I'm a new technologies developper, what do you do?|Awesome, {previous-answer}! And what do you do?" type="radio" name="occupation" id="occupation-1" value="developer">
                    Developer
                </label>
        </div>
        <div class="radio">
                <label>
                  <input cf-questions="Hi, {previous-answer}! I'm a new technologies developper. I have no clue on what you do! |Greetings, {previous-answer}! Could you explain what is your job?" type="radio" name="occupation" id="occupation-2" value="designer">
                    Designer
                </label>
        </div>
        <div class="radio">
                <label>
                    <input cf-questions=" Hi, {previous-answsers}! Thanks for visiting my website! |Greetings, {previous-answer}!" type="radio" name="occupation" id="occupation-3" value="curious-mind">
                    Curious mind
                </label>
        </div>
        <div class="radio">
                <label>
                    <input cf-questions="Great to meet you, {previous-answer}! I'm a new technologies developper, what do you do?|Awesome, {previous-answer}! And what do you do?" type="radio" name="occupation" id="occupation-4" value="Recruiter">
                    Recruiter
                </label>
        </div>
      </fieldset>
    
      <fieldset>
        <label for="company">What company do you work for?</label> <br>
        <input cf-questions="WOW... {name}! Thank you for your interesed in my profil and in my work ! Can I know which company you are working for?" type="text" class="form-control" name="company" id="company">
      </fieldset>
    
      <fieldset>
        <label for="reason-contact">Why do you want to contact me?*</label> <br>
        <input cf-questions="Why do you want to contact me?" type="text" name="reason-contact" id="reason-contact" class="form-control" required>
      </fieldset>
    
      <fieldset>
        <label for="email">What's your email? * </label> <br>
        <input pattern=".+\@.+\..+" cf-error="E-mail not correct" cf-questions="If you want me to be able to answer you, please give me your email." type="email" class="form-control" name="email" id="your-email" required>
      </fieldset>
    
      <fieldset>
        <label for="message">What message you want to delever me?*</label> <br>
        <textarea cf-questions="What message you want to delever me?" cols="30" rows="10" name="message" id="message" class="form-control" required></textarea>
      </fieldset>
      Please not that the questions marked with an asterix (*) are required. <br>
      I will only use your information to repley to you. 
      If you want, you can have a chat with <a href="#"> my bot</a>. 
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  <div id="cf-context" class="dark-theme" role="cf-context" cf-context></div>
  @endsection