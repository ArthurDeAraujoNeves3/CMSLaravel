<div class="Project card col" style="width: 18rem;">

    <img src="{{ asset("storage/" . $image) }}" class="card-img-top" alt="Banner" draggable="false" loading="false" />

    <div class="card-body">

      <h5 class="card-title">{{ $name }}</h5>
      <p class="card-text">{{ $description }}</p>

      <a href="{{ $github }}" target="_blank" class="btn btn-primary">Site</a>
      <a href="{{ $website }}" target="_blank" class="btn btn-primary">Github</a>

    </div>

  </div>
