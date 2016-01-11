<div class="message">
        @unless($errors->isEmpty())

        @foreach($errors->getMessages() as $error)
        <div class="alert alert-danger">
          {{ $error[0] }}.
      </div>
      @endforeach

      @endunless
</div>
