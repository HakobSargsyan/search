@extends('layouts.app')

<div class="container test-cont" style="margin-top: 100px;">
    <div class="input-group">
        <input type="text" class="form-control searchable" placeholder="Search for...">
        <span class="input-group-btn">
            <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
        </span>
    </div>
    <div class="search-result">
           <h1>Search Results</h1>
            <div class="col-xs-12 col-sm-12 col-md-3 result"></div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="{{ asset('js/search.js') }}"></script>