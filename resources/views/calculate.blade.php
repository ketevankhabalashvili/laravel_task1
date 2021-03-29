@extends('layout')
@section('container')
            <form action="{{ route('calculate') }}" method="POST">
                {{csrf_field()}}
                <div class="form-group col-md-3">
                    <label for="number_one"></label>
                    <input type="number" class="form-control" id="number_one" name="numberOne" placeholder="number one" min="0" step="1" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="number_two"></label>
                    <input type="number" class="form-control" id="number_two" name="numberTwo" placeholder="number two" min="0" step="1" required>
                </div>
                <div class="form-check-inline">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="action" id="gridRadios1" value="add" checked>
                    <label class="form-check-label" for="gridRadios1">add</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="action" id="gridRadios2" value="subtraction">
                    <label class="form-check-label" for="gridRadios2">subtraction</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="action" id="gridRadios3" value="multiplication">
                    <label class="form-check-label" for="gridRadios3">multiplication</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="action" id="gridRadios4" value="division">
                    <label class="form-check-label" for="gridRadios4">division</label>
                </div>
                </div>


                <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary">Calculate</button>
                </div>
            </form>
@endsection
