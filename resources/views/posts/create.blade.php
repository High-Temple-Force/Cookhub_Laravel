@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>

            <form action="{{ route('posts.store')  }}" method="post">
                @csrf
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input type="text"
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value="{{ old('title') }}"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>
                        <textarea 
                            name="hody" 
                            id="hody" 
                            rows="4"
                            class="form-control {{ $errors->has('hody') ? 'is-invalid' : '' }}">{{ old('hody') }}</textarea>
                        @if ($errors->has('hody'))
                            <div class="invalid-feedback">
                                {{ $errors->first('hody') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="tags">
                            タグ
                        </label>
                        <div >
                            <script type="text/javascript">
                                $(document).ready(function() {
                                        $('.js-example-basic-multiple').select2();
                                });
                            </script>
                            <select class="js-example-basic-multiple form-controll" name="tags[]" multiple="multiple" style="width:50%;">
                                @foreach ($tags as $tag)
                                <option value="{{ $tag->tags_id }}">{{ $tag->tagname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('top') }}">
                            キャンセル
                        </a>
                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    
@endsection