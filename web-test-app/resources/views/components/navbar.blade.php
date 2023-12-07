<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Web-приложение</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('projects.create')}}">Создание проекта</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('house.create')}}">Создание дома</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('apartment.create')}}">Создание квартиры</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('allprojects')}}">Список проектов</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
</div>