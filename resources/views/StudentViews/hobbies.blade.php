@extends('layouts.student.parent')

@section('content')

<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
      <div class="ui-block">
        <div class="ui-block-title">
          <h6 class="title">Hobbies and Interests</h6>
        </div>
        <div class="ui-block-content">
          <form>
            <div class="row">

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="control-label">Hobbies</label>
                <textarea class="form-control" id="hobbies">{{$hobby['hobbies']}}</textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Favourite TV Shows</label>
                  <textarea class="form-control" id="favourite_tv_shows">{{$hobby['favourite_tv_shows']}}</textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Favourite Movies</label>
                  <textarea class="form-control" id="favourite_movies">{{$hobby['favourite_movies']}}</textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Favourite Games</label>
                  <textarea class="form-control" id="favourite_games">{{$hobby['favourite_games']}}</textarea>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="control-label">Favourite Music Bands / Artists</label>
                  <textarea class="form-control" id="favourite_artists">{{$hobby['favourite_artists']}}</textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Favourite Books</label>
                  <textarea class="form-control" id="favourite_books">{{$hobby['favourite_books']}}</textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Favourite Writers</label>
                  <textarea class="form-control" id="favourite_writers">{{$hobby['favourite_writers']}}</textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">Other Interests</label>
                  <textarea class="form-control" id="favourite_interests">{{$hobby['favourite_interests']}}</textarea>
                </div>
              </div>
              <button class="btn btn-primary btn-lg full-width" type="button" id="save_hobby_information">Save all Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
  @include('StudentViews.components.responsive_sidebar_desktop')
</div>

@include('StudentViews.components.responsive_sidebar')
@endsection