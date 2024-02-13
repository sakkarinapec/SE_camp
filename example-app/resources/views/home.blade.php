@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <style>
        /* Custom form styles */
        .custom-form {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
        }

        .custom-form .card-header {
            background-color: #343a40;
            color: white;
            border-bottom: 1px solid #343a40;
            border-radius: 5px 5px 0 0;
            padding: 10px 20px;
        }

        .custom-form .card-footer {
            background-color: #343a40;
            border-top: 1px solid #343a40;
            border-radius: 0 0 5px 5px;
            padding: 10px 20px;
        }

        /* Additional custom styles */
        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>

    <div class="card-header">
        <h3 class="card-title">SE-CAMP Form</h3>
    </div>
    <form class="halloween-theme custom-form">
        <div class="card-body">
            {{-- Name --}}
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" id="InputName" placeholder="Enter Name">
            </div>

            {{-- Surname --}}
            <div class="form-group">
                <label for="InputSurname">Surname</label>
                <input type="text" class="form-control" id="InputSurname" placeholder="Enter Surname">
            </div>

            {{-- Birthday --}}
            <div class="form-group">
                <label for="InputBirthday">Birthday</label>
                <input type="date" class="form-control" id="InputBirthday">
            </div>

            {{-- Age --}}
            <div class="form-group">
                <label for="InputAge">Age</label>
                <input type="number" class="form-control" id="InputAge" placeholder="Enter Age" min="0" max="100">
            </div>

            {{-- Sex --}}
            <div class="form-group">
                <label>Sex</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="man">
                    <label class="form-check-label" for="man">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="woman">
                    <label class="form-check-label" for="woman">Female</label>
                </div>
            </div>

            {{-- Picture --}}
            <div class="form-group">
                <label for="InputFile">Picture</label>
                <input type="file" class="form-control-file" id="InputFile">
            </div>

            {{-- Address --}}
            <div class="form-group">
                <label for="InputAddress">Address</label>
                <textarea class="form-control" id="InputAddress" rows="3" placeholder="Enter your address"></textarea>
            </div>

            {{-- Favorite Color --}}
            <div class="form-group">
                <label for="InputColor">Favorite Color</label>
                <select class="form-control" id="InputColor">
                    <option>-</option>
                    <option>Blue</option>
                    <option>Purple</option>
                    <option>Pink</option>
                    <option>Green</option>
                    <option>Yellow</option>
                    <option>Orange</option>
                </select>
            </div>

            {{-- Favourite Song Type --}}
            <div class="form-group">
                <label>Favourite Song Type</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="songType" id="R&B">
                    <label class="form-check-label" for="R&B">R&B</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="songType" id="Rock">
                    <label class="form-check-label" for="Rock">Rock</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="songType" id="Pop">
                    <label class="form-check-label" for="Pop">Pop</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="songType" id="Punk">
                    <label class="form-check-label" for="Punk">Punk</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="songType" id="Other">
                    <label class="form-check-label" for="Other">Other</label>
                </div>
            </div>

            {{-- Phone Number --}}
            <div class="form-group">
                <label for="InputPhone">Phone Number</label>
                <input type="text" class="form-control" id="InputPhone" placeholder="Enter Phone Number">
            </div>

            {{-- Consent --}}
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Consent to collect personal information</label>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
