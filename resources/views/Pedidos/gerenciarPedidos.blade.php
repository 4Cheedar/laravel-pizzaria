@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
          <div class="col-4 m-2">
              <a class="btn btn-secondary btn-lg btn-block" href="{{route("admin.dashboard")}}">{{ __('welcome_dashboards.btnBack') }}</a>
              <div class="list-group m-2">
                  <a href="#"class="list-group-item list-group-item-action list-group-item-light">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 10 <span class="badge badge-secondary">{{ __('welcome_dashboards.itsNew') }}</span></h5>
                      <small>{{ __('welcome_dashboards.itsToday') }}</small>
                    </div>
                    <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não Sei, 2990</p>
                    <small>{{ __('welcome_dashboards.itsAmount') }}: R$180,00</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 9</h5>
                        <small>{{ __('welcome_dashboards.itsToday') }}</small>
                      </div>
                      <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não Sei, 2990</p>
                      <small>{{ __('welcome_dashboards.itsAmount') }}: R$150,00</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 8</h5>
                        <small>{{ __('welcome_dashboards.itsOneDay') }}</small>
                      </div>
                      <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não sei ainda To Procurando, 2990</p>
                      <small>{{ __('welcome_dashboards.itsAmount') }}: R$212,00</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 7</h5>
                        <small>{{ __('welcome_dashboards.itsOneDay') }}</small>
                      </div>
                      <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não Sei, 2990</p>
                      <small>{{ __('welcome_dashboards.itsAmount') }}: R$28,00</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 6</h5>
                        <small>{{ __('welcome_dashboards.itsTwoDay') }}</small>
                      </div>
                      <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não Sei, 2990</p>
                      <small>{{ __('welcome_dashboards.itsAmount') }}: R$172,00</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 5</h5>
                        <small>{{ __('welcome_dashboards.itsThreeDay') }}</small>
                      </div>
                      <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não Sei, 2990</p>
                      <small>{{ __('welcome_dashboards.itsAmount') }}: R$78,00</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 4</h5>
                        <small>{{ __('welcome_dashboards.itsThreeDay') }}</small>
                      </div>
                      <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não Sei, 2990</p>
                      <small>{{ __('welcome_dashboards.itsAmount') }}: R$66,00</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ __('welcome_dashboards.itsRequest') }} 3</h5>
                        <small>{{ __('welcome_dashboards.itsThreeDay') }}</small>
                      </div>
                      <p class="mb-1">{{ __('welcome_dashboards.itsAddress') }}: Avenida. Não Sei, 2990</p>
                      <small>{{ __('welcome_dashboards.itsAmount') }}: R$48,00</small>
                  </a>
              </div>
          </div>
          <div class="col-7 m-2">
              <div class="card m-2">
                  <div class="card-header text-center">
                    <p><h3>{{ __('welcome_dashboards.itsRequest') }} 8</h3></p>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info">
                          Avenida. Não sei ainda To Procurando, 2990
                      </button>
                    </div>
                  </div>

                  <div class="card-body">
                      <h5 class="card-title text-center">{{ __('welcome_dashboards.itsOneDay') }}</h5>
                      <p class="card-text border border-dark p-2">Pizza - Pepperoni - x1  <a href="#"><i class="bi bi-pencil-fill"></i></a> <a href="#"><i class="bi bi-trash3-fill"></i></a> </p>
                      <p class="card-text border border-dark p-2">Suco - Laranja - x2 <a href="#"><i class="bi bi-pencil-fill"></i></a> <a href="#"><i class="bi bi-trash3-fill"></i></a> </p>
                      <p class="card-text border border-dark p-2">Cerveja - Skoll Lata - x2 <a href="#"><i class="bi bi-pencil-fill"></i></a> <a href="#"><i class="bi bi-trash3-fill"></i></a> </p>
                      <p class="card-text border border-dark p-2">Pizza - 4 Queijos - x1 <a href="#"><i class="bi bi-pencil-fill"></i></a> <a href="#"><i class="bi bi-trash3-fill"></i></a> </p>
                      <p class="card-text border border-dark p-2">Pizza - Chocolate - x1 <a href="#"><i class="bi bi-pencil-fill"></i></a> <a href="#"><i class="bi bi-trash3-fill"></i></a> </p>
                      <p class="card-text border border-dark p-2">Suco - Limão Lata - x1 <a href="#"><i class="bi bi-pencil-fill"></i></a> <a href="#"><i class="bi bi-trash3-fill"></i></a> </p>

                    <div class="text-center">
                      <a href="#" class="btn btn-success">{{ __('welcome_dashboards.btnFinalize') }}</a>
                      <a href="#" class="btn btn-warning">{{ __('welcome_dashboards.btnConfirm') }}</a>
                      <a href="#" class="btn btn-info">{{ __('welcome_dashboards.btnCommands') }}</a>
                      <a href="#" class="btn btn-danger">{{ __('welcome_dashboards.btnCancel') }}</a>
                    </div>

                    <div class="text-center m-2">
                      <div class="btn-group">
                          <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Pizza
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Suco</button>
                            <button class="dropdown-item" type="button">Cerveja</button>
                            <button class="dropdown-item" type="button">Pizza</button>
                          </div>
                        </div>
  
                        <div class="btn-group">
                          <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Calabresa
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Pepperoni</button>
                            <button class="dropdown-item" type="button">4 Queijos</button>
                            <button class="dropdown-item" type="button">Chocolate</button>
                          </div>
                        </div>

                        <div class="btn-group">
                          <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            2
                          </button>
                          <div class="dropdown-menu dropdown-menu-right">
                            
                          </div>
                        </div>

                        <a href="#" class="btn btn-outline-dark">{{ __('welcome_dashboards.btnAddProduct') }}</a>
                    </div>

                  </div>

                  <div class="card-footer text-muted text-center">
                    {{ __('welcome_dashboards.itsAmount') }}: R$ 212,00
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
