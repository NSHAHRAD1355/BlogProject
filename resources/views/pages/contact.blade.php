

@extends('main')
@section('title', '| contact')
@section('content')
    <div class="row">
        <div class="col-md-12">

                <h1 class="display-4 pb-2">Contact Me</h1>
             <hr>
            <form>
                <div class="form-group">
                    <label name="email" >Email:</label>
                    <input id="email" name="email" class="form-control">

                </div>
                <div class="form-group">
                    <label name="email" >Subject:</label>
                    <input id="subject" name="subject" class="form-control">

                </div>
                <div class="form-group">
                    <label name="email" >Message:</label>
                    <textarea id="message" name="message" class="form-control">type your message here ...</textarea>

                </div>
                <input type="submit" value="send message" class="btn btn-success mt-2">
            </form>

            </div>

        </div>
    </div>

@endsection





