
    <x-layout>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container py-5">
                <h1 class="display-5 fw-bold">Contattami</h1>
                <div class="col-12 col-md-9">
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Inserisci il tuo nome</label>
    <input type="text" name="user" class="form-control" id="user" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Inserisci la tua mail</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Scrivi qui il tuo messaggio</label>
    <textarea name="message" id="message" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Invia</button>
</form>
                </div>
            </div>
        </div>

    

    </x-layout>
