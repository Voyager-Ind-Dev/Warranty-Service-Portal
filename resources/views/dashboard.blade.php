@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="d-md-flex justify-content-md-between align items-md-center mb-4">
        <h1>Dashboard</h1>
    </div>
    <section>
        <div class="row">
            <div class="col-md-4">
                <div class="card stat-card">
                    <h3>4</h3>
                    <h5>OPEN SERVICE TICKETS</h5>
                    <div clas="btn-row">
                        <a href="#" class="btn btn-secondary btn-sm">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card">
                    <h3>8</h3>
                    <h5>OPEN WARRANTY CLAIMS</h5>
                    <div clas="btn-row">
                        <a href="#" class="btn btn-secondary btn-sm">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card">
                    <h3>5</h3>
                    <h5>OPEN PARTS ORDERS</h5>
                    <div clas="btn-row">
                        <a href="#" class="btn btn-secondary btn-sm">View</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-6">
                <h2>Recent Updates on Tickets</h2>
            </div>
            <div class="col-md-6">
                <h2>Recent Notifications+</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li class="ticket-update">
                        <div class="details">
                            <a href="#"><strong>#248763</strong></a>
                            <span class="action"><strong>Status set to Approved by Carrie Obright</strong></span>
                        </div>
                        <div class="date"></div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-unstyled">
                    <li class="ticket-update">
                        <div class="details">
                            <a href="#"><strong>#248763</strong></a>
                            <span class="action"><strong>Status set to Approved by Carrie Obright</strong></span>
                        </div>
                        <div class="date"></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>        
</div>
@endsection