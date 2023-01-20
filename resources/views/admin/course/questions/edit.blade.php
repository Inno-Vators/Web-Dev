@extends('layouts.dashboard')
@section('content')
{{-- <div class="container">
    <form class="border rounded p-5" id="form" enctype="multipart/form-data" method="POST" action="" >
        @csrf
        <div class="mb-3">
            <label for="question" class="form-label">Question</label>
            <textarea class="form-control" id="question" rows="3" name="question" required></textarea>
        </div>

        <div class="mb-3">
            <label for="option1" class="form-label">Option 1</label>
            <input type="text" name="options[]" class="form-control" id="option1" placeholder="Option 1">
        </div>

        <div class="mb-3">
            <label for="option2" class="form-label">Option 2</label>
            <input type="text" name="options[]" class="form-control" id="option2" placeholder="Option 2">
        </div>

        <div class="mb-3">
            <label for="option3" class="form-label">Option 3</label>
            <input type="text" name="options[]" class="form-control" id="option3" placeholder="Option 3">
        </div>

        <div class="mb-3">
            <label for="option4" class="form-label">Option 4</label>
            <input type="text" name="options[]" class="form-control" id="option4" placeholder="Option 4">
        </div>

        <div class="mb-3">
            <label for="answer" class="form-label">Answer</label>
            <select name="answer" id="answer" class="form-control">
                <option value="">Select answer</option>
                <option value="0">Option 1</option>
                <option value="1">Option 2</option>
                <option value="2">Option 3</option>
                <option value="3">Option 4</option>
            </select>
        </div>



        <button class="btn btn-primary d-block btn-user w-100" type="submit"  >Create Question</button>
    </form>


    <script>
        // const form = document.getElementById("form");
        // form.addEventListener('submit', submit);
        // function submit(e) {
        //     e.preventDefault();
        //     let question = document.getElementById("question").value;
        //     let option = document.getElementsByName('options[]');
        //     let answer = document.getElementById('answer').value;
        //     var submitOptions =[];
        //     for (let index = 0; index < option.length; index++) {

        //         submitOptions.push(option[index].value);
        //     }
        //     // console.log(submitOptions);
        //     fetch(url, {
        //         method: 'POST',
        //         headers: {
        //             "Accept": "application/json",
        //             "Content-type": "application/json",
        //             "X-CSRF-TOKEN": "{{ csrf_token() }}"
        //         },
        //         body: JSON.stringify({
        //             question: question,
        //             options: submitOptions,
        //             answer: answer
        //         })
        //     }).then(
        //         (res)=>res.json
        //     ).then(
        //         (data)=>{
        //             // console.log(data.message);
        //             alert('inserted successfully into DB');
        //         }
        //     )
        // }


    </script>
</div> --}}
@endsection
