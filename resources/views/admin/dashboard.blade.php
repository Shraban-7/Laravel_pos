@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')

<h3>Welcome, Admin</h3>

<div class="row row-cols-1 row-cols-xl-4 row-cols-md-2">
    <div class="col mb-5">
        <div class="card h-100 card-lift">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted fw-semi-bold ">Games</span>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart text-info">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg></span>

                </div>
                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                    <h3 class="fw-bold  mb-0">ok</h3>

                </div>
                <a href="#" class="btn-link fw-semi-bold">See All</a>
            </div>
        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100 card-lift">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted fw-semi-bold ">Users</span>
                    <i data-feather="users" class="text-primary"></i>
                </div>
                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                    <h3 class="fw-bold  mb-0">ok</h3>
                </div>
                <a href="#!" class="btn-link fw-semi-bold">See Users</a>
            </div>
        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100 card-lift">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted fw-semi-bold ">Transactions</span>
                    <i data-feather="plus-circle" class="text-success"></i>

                </div>
                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                    <h3 class="fw-bold  mb-0">ok</h3>
                </div>
                <a href="#!" class="btn-link fw-semi-bold">See All</a>
            </div>
        </div>
    </div>
    <div class="col mb-5">
        <div class="card h-100 card-lift">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted fw-semi-bold ">Transactions</span>
                    <i data-feather="minus-circle" class="text-danger"></i>

                </div>
                <div class="mt-4 mb-3 d-flex align-items-center lh-1">
                    <h3 class="fw-bold mb-0">ok</h3>
                </div>
                <a href="#!" class="btn-link fw-semi-bold">See All</a>
            </div>
        </div>
    </div>
</div>


<div class="row d-none">
    <div class="col-lg-12 col-md-12 col-12">
        <div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0  text-white">Projects</h3>
                </div>
                <div>
                    <a href="#" class="btn btn-white">Create New Project</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
        <div class="card ">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center
                                mb-3">
                    <div>
                        <h4 class="mb-0">Projects</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                                    rounded-2">
                        <i class="bi bi-briefcase fs-4"></i>
                    </div>
                </div>
                <div>
                    <h1 class="fw-bold">18</h1>
                    <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
        <div class="card ">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center
                                mb-3">
                    <div>
                        <h4 class="mb-0">Active Task</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                                    rounded-2">
                        <i class="bi bi-list-task fs-4"></i>
                    </div>
                </div>
                <div>
                    <h1 class="fw-bold">132</h1>
                    <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
        <div class="card ">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center
                                mb-3">
                    <div>
                        <h4 class="mb-0">Teams</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                                    rounded-2">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                </div>
                <div>
                    <h1 class="fw-bold">12</h1>
                    <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
        <div class="card ">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center
                                mb-3">
                    <div>
                        <h4 class="mb-0">Productivity</h4>
                    </div>
                    <div class="icon-shape icon-md bg-light-primary text-primary
                                    rounded-2">
                        <i class="bi bi-bullseye fs-4"></i>
                    </div>
                </div>
                <div>
                    <h1 class="fw-bold">76%</h1>
                    <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-6 d-none">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header bg-white  py-4">
                <h4 class="mb-0">Active Projects</h4>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Project name</th>
                            <th>Hours</th>
                            <th>priority</th>
                            <th>Members</th>
                            <th>Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex
                                                align-items-center">
                                    <div>
                                        <div class="icon-shape icon-md border p-4
                                                        rounded-1">
                                            <img
                                                src="{{asset('assets/admin/images/brand/dropbox-logo.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1"> <a href="#"
                                                class="text-inherit">Dropbox Design
                                                System</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">34</td>
                            <td class="align-middle"><span class="badge
                                            bg-warning">Medium</span></td>
                            <td class="align-middle">
                                <div class="avatar-group">
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-1.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-2.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-3.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                                    fs-6">+5</span>
                                    </span>
                                </div>
                            </td>
                            <td class="align-middle text-dark">
                                <div
                                    class="float-start me-3">15%</div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:15%" aria-valuenow="15"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex
                                                align-items-center">
                                    <div>
                                        <div class="icon-shape icon-md border p-4
                                                        rounded-1">
                                            <img src="{{asset('assets/admin/images/brand/slack-logo.svg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1"> <a href="#"
                                                class="text-inherit">Slack Team UI Design</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">47</td>
                            <td class="align-middle"><span class="badge
                                            bg-danger">High</span></td>
                            <td class="align-middle">
                                <div class="avatar-group">
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-4.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-5.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-6.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                                    fs-6">+5</span>
                                    </span>
                                </div>
                            </td>
                            <td class="align-middle text-dark">
                                <div
                                    class="float-start me-3">35%</div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:35%" aria-valuenow="35"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex
                                                align-items-center">
                                    <div>
                                        <div class="icon-shape icon-md border p-4
                                                        rounded-1">
                                            <img
                                                src="{{asset('assets/admin/images/brand/github-logo.svg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1"> <a href="#"
                                                class="text-inherit">GitHub Satellite</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">120</td>
                            <td class="align-middle"><span class="badge bg-info">Low</span></td>
                            <td class="align-middle">
                                <div class="avatar-group">
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-7.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-8.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-9.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                                    fs-6">+1</span>
                                    </span>
                                </div>
                            </td>
                            <td class="align-middle text-dark">
                                <div
                                    class="float-start me-3">75%</div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex
                                                align-items-center">
                                    <div>
                                        <div class="icon-shape icon-md border p-4
                                                        rounded-1">
                                            <img
                                                src="{{asset('assets/admin/images/brand/3dsmax-logo.svg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1"> <a href="#"
                                                class="text-inherit">3D Character Modelling</a></h5>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">89</td>
                            <td class="align-middle"><span class="badge
                                            bg-warning">Medium</span></td>
                            <td class="align-middle">
                                <div class="avatar-group">
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-10.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-11.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-12.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                                    fs-6">+5</span>
                                    </span>
                                </div>
                            </td>
                            <td class="align-middle text-dark">
                                <div
                                    class="float-start me-3">63%</div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:63%" aria-valuenow="63"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex
                                                align-items-center">
                                    <div>
                                        <div class="icon-shape icon-md border p-4 rounded
                                                        bg-primary">
                                            <img
                                                src="{{asset('assets/admin/images/brand/layers-logo.svg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1"> <a href="#"
                                                class="text-inherit">Webapp Design System</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">108</td>
                            <td class="align-middle"><span class="badge
                                            bg-success">Track</span></td>
                            <td class="align-middle">
                                <div class="avatar-group">
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-13.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-14.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-15.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                                    fs-6">+5</span>
                                    </span>
                                </div>
                            </td>
                            <td class="align-middle text-dark">
                                <div
                                    class="float-start me-3">100%</div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success"
                                            role="progressbar" style="width:100%"
                                            aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle border-bottom-0">
                                <div class="d-flex
                                                align-items-center">
                                    <div>
                                        <div class="icon-shape icon-md border p-4 rounded-1">
                                            <img
                                                src="{{asset('assets/admin/images/brand/github-logo.svg')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1"> <a href="#"
                                                class="text-inherit">Github Event Design</a>
                                        </h5>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle border-bottom-0">120</td>
                            <td class="align-middle border-bottom-0"><span class="badge bg-info">Low</span></td>
                            <td class="align-middle border-bottom-0">
                                <div class="avatar-group">
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-13.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-14.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm">
                                        <img alt="avatar"
                                            src="{{asset('assets/admin/images/avatar/avatar-15.jpg')}}"
                                            class="rounded-circle">
                                    </span>
                                    <span class="avatar avatar-sm avatar-primary">
                                        <span class="avatar-initials rounded-circle
                                                    fs-6">+1</span>
                                    </span>
                                </div>
                            </td>
                            <td class="align-middle text-dark border-bottom-0">
                                <div
                                    class="float-start me-3">75%</div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white text-center">
                <a href="#" class="link-primary">View All Projects</a>
            </div>
        </div>
    </div>
</div>
<div class="row my-6 d-none">
    <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex align-items-center
                                justify-content-between">
                    <div>
                        <h4 class="mb-0">Tasks Performance </h4>
                    </div>
                    <div class="dropdown dropstart">
                        <a class="text-muted text-primary-hover" href="#"
                            role="button" id="dropdownTask" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xxs" data-feather="more-vertical"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownTask">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <div id="perfomanceChart"></div>
                </div>
                <div class="d-flex align-items-center justify-content-around">
                    <div class="text-center">
                        <i class="icon-sm text-success"
                            data-feather="check-circle"></i>
                        <h1 class="mt-3  mb-1 fw-bold">76%</h1>
                        <p>Completed</p>
                    </div>
                    <div class="text-center">
                        <i class="icon-sm text-warning"
                            data-feather="trending-up"></i>
                        <h1 class="mt-3  mb-1 fw-bold">32%</h1>
                        <p>In-Progress</p>
                    </div>
                    <div class="text-center">
                        <i class="icon-sm text-danger"
                            data-feather="trending-down"></i>
                        <h1 class="mt-3  mb-1 fw-bold">13%</h1>
                        <p>Behind</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
        <div class="card h-100">
            <div class="card-header bg-white py-4">
                <h4 class="mb-0">Teams </h4>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Last Activity</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets/admin/images/avatar/avatar-2.jpg')}}"
                                            alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1">Anita Parmar</h5>
                                        <p class="mb-0">anita@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Front End Developer</td>
                            <td class="align-middle">3 May, 2021</td>
                            <td class="align-middle">
                                <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamOne"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamOne">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets/admin/images/avatar/avatar-1.jpg')}}"
                                            alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1">Jitu Chauhan</h5>
                                        <p class="mb-0">jituchauhan@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Project Director </td>
                            <td class="align-middle">Today</td>
                            <td class="align-middle">
                                <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamTwo"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamTwo">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets/admin/images/avatar/avatar-3.jpg')}}"
                                            alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1">Sandeep Chauhan</h5>
                                        <p class="mb-0">sandeepchauhan@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Full- Stack Developer</td>
                            <td class="align-middle">Yesterday</td>
                            <td class="align-middle">
                                <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamThree"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamThree">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets/admin/images/avatar/avatar-4.jpg')}}"
                                            alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1">Amanda Darnell</h5>
                                        <p class="mb-0">amandadarnell@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Digital Marketer</td>
                            <td class="align-middle">3 May, 2021</td>
                            <td class="align-middle">
                                <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamFour"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamFour">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets/admin/images/avatar/avatar-5.jpg')}}"
                                            alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1">Patricia Murrill</h5>
                                        <p class="mb-0">patriciamurrill@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Account Manager</td>
                            <td class="align-middle">3 May, 2021</td>
                            <td class="align-middle">
                                <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamFive"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamFive">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle border-bottom-0">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets/admin/images/avatar/avatar-6.jpg')}}"
                                            alt="" class="avatar-md avatar rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class=" mb-1">Darshini Nair</h5>
                                        <p class="mb-0">darshininair@example.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle border-bottom-0">Front End Developer</td>
                            <td class="align-middle border-bottom-0">3 May, 2021</td>
                            <td class="align-middle border-bottom-0">
                                <div class="dropdown dropstart">
                                    <a class="text-muted text-primary-hover" href="#"
                                        role="button" id="dropdownTeamSix"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="icon-xxs" data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu"
                                        aria-labelledby="dropdownTeamSix">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else
                                            here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
