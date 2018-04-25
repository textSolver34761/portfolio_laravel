@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <h1 class="text-center">Contact me </h1>
    <form class="jumbotron  form-control" method="post" action="https://formspree.io/pradonbenjamin@gmail.com"id="my-form-element" cf-form>
      <fieldset class="for-control">
        <label for="name">What's your name?*</label> <br>
        <input required cf-questions="Hi there! What's your name? 😊" type="text" class="form-control" name="name" id="name" />
      </fieldset>
      <br>
      <fieldset class="for-control">
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
      <br>
      <fieldset class="for-control">
        <label for="company">What company do you work for?</label> <br>
        <input cf-questions="WOW... {name}! Thank you for your interesed in my profil and in my work ! Can I know which company you are working for?" type="text" class="form-control" name="company" id="company">
      </fieldset>
      <br>
      <fieldset class="for-control">
        <label for="reason-contact">Why do you want to contact me?*</label> <br>
        <input cf-questions="Why do you want to contact me?" type="text" name="reason-contact" id="reason-contact" class="form-control" required>
      </fieldset>
      <br>
      <fieldset class="for-control">
        <label for="email">What's your email? * </label> <br>
        <input pattern=".+\@.+\..+" cf-error="E-mail not correct" cf-questions="If you want me to be able to answer you, please give me your email." type="email" class="form-control" name="email" id="your-email" required>
      </fieldset>
      <br>
      <fieldset class="for-control">
        <label for="message">What is the message you want to delever me?*</label> <br>
        <textarea cf-questions="What message you want to delever me?" cols="30" rows="10" name="message" id="message" class="form-control" required></textarea>
      </fieldset>
      <br><br>
      Please not that the questions marked with an asterix (*) are required. <br>
      <b> By clicking on "Submit", you agree with the <a href="/termsconditions">terms and conditions</a> of the site </b> <br>
      I will only use your information to reply to you. 
      If you want, you can have a chat with <a href="https://landbot.io/u/H-27113-GJVK3FFB9B71354C/index.html"> my bot</a>. <br>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  <div id="cf-context" class="dark-theme" role="cf-context" cf-context></div>
  @endsection