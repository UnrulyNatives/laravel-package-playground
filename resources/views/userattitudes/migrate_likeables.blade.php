


@extends('userattitudes.layouts.master_bootstrap_scaffold')


@section('content')


@if(isset($perform) && $perform = 1)
    
        <h2>Overwrite warning: {{@$overwrite_warning}}.</h2>


        @if($affected == $source->count())

                <div class="communique-success communique-cleared" id="">
                    <h4>The migration process completed with 100% success!  </h4>
                    <p>
                        The count of source records and the newly migrated records is now the same: {{@$source->count()}}
                    </p>
                </div>

        @else   
                <div class="communique-warning communique-cleared" id="">
                    <h4>The migration process is not yet completed  </h4>
                    <p>
                        The count of source records and the newly migrated records are not the same: Source: {{@$source->count()}} Migrated: {{$affected}}.
                    </p>
                </div>
        @endif

@else
        <h1> Items to be affected: {{@$source->count()}}.</h1>

@endif




        <div class="communique-info communique-cleared" id="">
            <h4>This migration will do the following:</h4>
            <p>
                <ol>
                    <li>Copy all rows from `likeable_likes` table into your `Userattitude` table (by default table name is `userattitudes`) </li>
                    <li>Copy all rows from `likeable_like_counters` table into your `userattitudes_count` table </li>
                    <li>The row is counted as upvote, as the rtconner's package doesn't service downvotes</li>
                    <li>The source tables are not affected</li>
                    <li>An optional marker is added to the `user_notes` field - so that you know that everything worked correctly </li>
                </ol>

            </p>
        </div>


<h2>Commence the migration: Choose the desired option</h2>
<div class="un_container un_flex un_flex_ht csch_subtle3">
    
    <div class="un_box">
        The below button will simply migrate the rtconner data into your new userattitudes table
        <a href="{{ URL::to(Request::url().'?perform=1') }}" class="btn btn-danger" target="_blank">
          <i class="linkify icon"></i>
          PERFORM
        </a>
    </div>

    <div class="un_box">
    The tool will write a marker in `user_notes` -> all the migrated records would contain `migrated OK` value.
        <a href="{{ URL::to(Request::url().'?perform=1&marker=1') }}" class="btn btn-danger" target="_blank">
          <i class="linkify icon"></i>
          PERFORM with feedback
        </a>
    </div>
    <div class="un_box">
     Migrate the `likeable_like_counters` to `userattitudes_counters` table only.
        <a href="{{ URL::to(Request::url().'?docounters=1') }}" class="btn btn-danger" target="_blank">
          <i class="linkify icon"></i>
          Migrate counters only.
        </a>
    </div>
</div> 


@if($affected == $source->count())

        <div class="communique-success communique-cleared" id="">
            <h4>The migration process completed with 100% success!  </h4>
            <p>
            	The count of source records and the newly migrated records is now the same: {{@$source->count()}}
            </p>
        </div>

@else	
        <div class="communique-warning communique-cleared" id="">
            <h4>The migration process is not yet completed  </h4>
            <p>
            	The count of source records and the newly migrated records are not the same: Source: {{@$source->count()}} Migrated: {{$affected}}.
            </p>
        </div>
@endif


@stop        


@push('css')


@endpush
@push('scripts_in_head')


@endpush
@push('scripts_in_tail')
    

@endpush