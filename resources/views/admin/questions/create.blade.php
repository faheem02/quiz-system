@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                <i class="fas fa-question-circle"></i>
                Add Question – {{ $quiz->title }}
            </h5>
        </div>

        <div class="card-body">

            <form method="POST" action="{{ route('admin.questions.store', $quiz->id) }}">
                @csrf

                <!-- QUESTION -->
                <div class="mb-4">
                    <label class="form-label fw-bold">Question</label>
                    <input type="text" name="question" class="form-control form-control-lg" placeholder="Enter question..." required>
                </div>

                <!-- OPTIONS -->
                <div id="options-wrapper">
                    @for($i = 0; $i < 4; $i++)
                        <div class="mb-3 option-item d-flex align-items-center">
                            <span class="badge bg-secondary me-2">Option {{ $i + 1 }}</span>
                            <input type="text" name="options[]" class="form-control" placeholder="Enter option..." required>
                        </div>
                    @endfor
                </div>

                <!-- ACTION BUTTONS -->
                <div class="mb-4">
                    <button type="button" class="btn btn-outline-primary btn-sm me-2" onclick="addOption()">
                        <i class="fas fa-plus-circle"></i> Add Option
                    </button>

                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="removeOption()">
                        <i class="fas fa-minus-circle"></i> Remove Option
                    </button>
                </div>

                <!-- CORRECT OPTION -->
                <div class="mb-4">
                    <label class="form-label fw-bold">Correct Answer</label>
                    <select name="correct_option" id="correct_option" class="form-select" required>
                        <option value="">Select correct option</option>
                        <option value="0">Option 1</option>
                        <option value="1">Option 2</option>
                        <option value="2">Option 3</option>
                        <option value="3">Option 4</option>
                    </select>
                </div>

                <!-- SUBMIT -->
                <div class="text-end">
                    <button class="btn btn-success px-4">
                        <i class="fas fa-save"></i> Save Question
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script>
    let optionCount = 4;
    const minOptions = 2;

    function addOption() {
        optionCount++;

        const wrapper = document.getElementById('options-wrapper');

        const div = document.createElement('div');
        div.className = 'mb-3 option-item d-flex align-items-center';

        div.innerHTML = `
            <span class="badge bg-secondary me-2">Option ${optionCount}</span>
            <input type="text" name="options[]" class="form-control" placeholder="Enter option..." required>
        `;

        wrapper.appendChild(div);

        const select = document.getElementById('correct_option');
        const opt = document.createElement('option');
        opt.value = optionCount - 1;
        opt.text = `Option ${optionCount}`;
        select.appendChild(opt);
    }

    function removeOption() {
        if (optionCount <= minOptions) {
            alert('At least 2 options are required.');
            return;
        }

        document.getElementById('options-wrapper').lastElementChild.remove();
        document.getElementById('correct_option').lastElementChild.remove();

        optionCount--;

        const select = document.getElementById('correct_option');
        if (select.value >= optionCount) {
            select.value = '';
        }
    }
</script>
@endsection
