<div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">{{$festival->name}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body">
    <h3>{{$festival->country}}</h3>
    <h4>{{$festival->city}}</h4>
    <p>Festival homepage: <a href="{{$festival->url}}" target="_blank"> {{$festival->name}}</a></p>
    <p>Date: from {{$festival->from}}
        {{$festival->til}}</p>

    <p> Genre: {{$festival->music}} </p>
    <p><i class="fas fa-calendar-day"></i> Dayticket: {{$festival->dayticket}}</p>
    <p><i class="fas fa-calendar-week"></i> Weekendticket: {{$festival->wknd}}</p>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>