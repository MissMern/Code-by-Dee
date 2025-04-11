@extends('usermanagement::layouts.master')

@section('breadcrums')
<style>
/* Page Title Styling */
.page-title-box {
    background-color: #8B0000;
    padding: 18px;
    border-radius: 10px;
    font-family: 'Poppins', sans-serif;
    color: white;
    text-align: center;
    margin-bottom: 20px;
    color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.page-title {
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0;
    color: #fff;
}

/* Upload Section */
.upload-section {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

/* Upload Form */
.upload-form {
    width: 60%;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.15);
}

/* Form Grid */
.form-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 15px; /* Evenly spaces columns */
}

.form-group {
    width: 48%; /* Two columns */
    margin-bottom: 15px;
}

/* Full-Width Fields */
.full-width {
    width: 100%;
}

/* Input Styling */
.upload-form input,
.upload-form select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
}

/* Hover & Focus */
.upload-form input:focus,
.upload-form select:focus {
    border: 1px solid #8B0000;
    outline: none;
    box-shadow: 0 0 5px rgba(139, 0, 0, 0.4);
}

/* Submit Button */
.upload-form button {
    width: 100%;
    padding: 12px;
    background-color: #8B0000;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease;
}

.upload-form button:hover {
    background-color: #6A0000;
}

/* Responsive Design */
@media (max-width: 768px) {
    .upload-form {
        width: 90%;
    }

    .form-group {
        width: 100%; /* Full-width on small screens */
    }
}

</style>
<div class="col-12">
    <div class="page-title-box">
        <h4 class="page-title" style="color: #FFFFFF;">{{ @$page_title }}</h4> <!-- Gold Color -->
    </div>
</div>

@stop

@section('content')
<div class="upload-section">
    <div class="upload-form">
        <form action="{{ url('AdminModule/Documents/UploadDocument') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Two-Column Row -->
            <div class="form-row">
                <div class="form-group">
                    <label for="DocCategory">Document Category</label>
                    <select name="DocCategory" id="DocCategory" class="form-control" required>
                        <option value="">Select Document Category</option>
                        @if(isset($data['categories']))
                            @foreach($data['categories'] as $category)
                                <option value="{{ $category->id }}">{{ $category->CategoryName }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <label for="DocumentName">Document Name</label>
                    <input type="text" name="DocumentName" id="DocumentName" class="form-control" required placeholder="Enter Document Name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="DocumentRef">Document Ref No</label>
                    <input type="text" name="DocumentRef" id="DocumentRef" class="form-control" required placeholder="Enter Document Ref No">
                </div>

                <div class="form-group">
                    <label for="DocumentAuthor">Document Author</label>
                    <input type="text" name="DocumentAuthor" id="DocumentAuthor" class="form-control" required placeholder="Enter Document Author">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="DocumentVersion">Document Version</label>
                    <input type="text" name="DocumentVersion" id="DocumentVersion" class="form-control" required placeholder="Enter Document Version">
                </div>

                <div class="form-group">
                    <label for="DocumentDate">Document Date</label>
                    <input type="date" name="DocumentDate" id="DocumentDate" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label for="DocumentFile">Upload Document</label>
                    <input type="file" name="DocumentFile" id="DocumentFile" class="form-control" required accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.jpg,.png,.jpeg">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group full-width">
                    <label for="AccessType">Access Type</label>
                    <select name="AccessType" id="AccessType" class="form-control" required>
                        <option value="">Select Access Type</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                        <option value="Restricted">Restricted</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Upload Document</button>
        </form>
    </div>
</div>
@stop
