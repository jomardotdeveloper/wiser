@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div
                class="
                  round round-lg
                  text-white
                  d-flex
                  align-items-center
                  justify-content-center
                  rounded-circle
                  bg-info
                "
              >
                <i
                  data-feather="user"
                  class="fill-white feather-lg"
                ></i>
              </div>
              <div class="ms-2 align-self-center">
                <h3 class="mb-0">{{ auth()->user()->fullname }}</h3>
                <h6 class="text-muted mb-0">User</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div
                class="
                  round round-lg
                  text-white
                  d-flex
                  align-items-center
                  justify-content-center
                  rounded-circle
                  bg-warning
                "
              >
                <i
                  data-feather="clock"
                  class="fill-white feather-lg"
                ></i>
              </div>
              <div class="ms-2 align-self-center">
                <h3 class="mb-0">{{ auth()->user()->remaining_time_formatted }}</h3>
                <h6 class="text-muted mb-0">Remaining time</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div
                class="
                  round round-lg
                  text-white
                  d-flex
                  align-items-center
                  justify-content-center
                  rounded-circle
                  bg-primary
                "
              >
                <i
                  data-feather="monitor"
                  class="fill-white feather-lg"
                ></i>
              </div>
              <div class="ms-2 align-self-center">
                <h3 class="mb-0">
                    {{ auth()->user()->mac_address }}
                </h3>
                <h6 class="text-muted mb-0">MAC</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div
                class="
                  round round-lg
                  text-white
                  d-flex
                  justify-content-center
                  align-items-center
                  rounded-circle
                  bg-danger
                "
              >
                <i
                  data-feather="shield"
                  class="fill-white feather-lg"
                ></i>
              </div>
              <div class="ms-2 align-self-center">
                <h3 class="mb-0">{{ auth()->user()->ip_address }}</h3>
                <h6 class="text-muted mb-0">IP</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div
                class="
                  round round-lg
                  text-white
                  d-flex
                  justify-content-center
                  align-items-center
                  rounded-circle
                  bg-success
                "
              >
                <i
                  data-feather="trash"
                  class="fill-white feather-lg"
                ></i>
              </div>
              <div class="ms-2 align-self-center">
                <h3 class="mb-0">0</h3>
                <h6 class="text-muted mb-0">Total Disposal</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
