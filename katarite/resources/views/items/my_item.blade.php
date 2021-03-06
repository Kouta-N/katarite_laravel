@if( Auth::id() === $item->user_id )
    <div class="card mt-3">
        <div class="card-body d-flex flex-row w-100">
            <div class="card_profile_layout">
                <div class="h4 font-weight-bold">
                    {!! nl2br(e($item->user->name)) !!}
                </div>
                <div>
                    <img class="rounded-circle image_round" src="{!! nl2br(e(asset($item->img_path))) !!}">
                </div>
                <div class="h6 mt-3 text-left overflow-auto">
                    1時間あたりの単価 : {{ number_format($item->price) }} 円
                </div>
                <div class="font-weight-lighter mt-3 overflow-auto">
                    {{ $item->created_at->format('Y/m/d H:i') }}
                </div>
            </div>
            <div class="card-body pt-0 card_body_layout">
                <div class="h4 font-weight-bold card-title">
                    <a class="text-dark" href="{{ route('items.show',['item'=>$item]) }}">
                        {!! nl2br(e($item->title)) !!}
                    </a>
                </div>
                <div class="card-text text-left overflow-auto border-top border-info">
                    <span class="card_text_layout">
                        {!! nl2br(e($item->body)) !!}
                    </span>
                </div>
            </div>
            <!-- dropdown -->
            <div class="ml-auto card-text">
                <div class="dropdown">
                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route("items.edit", ['item' => $item]) }}">
                            <i class="fas fa-pen mr-1"></i>
                            投稿内容を更新する
                        </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">
                            <i class="fas fa-trash-alt mr-1"></i>
                            投稿内容を削除する
                        </a>
                    </div>
                </div>
            </div>
            <!-- dropdown -->
            <!-- modal -->
            <div id="modal-delete-{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <form method="POST" action="{{ route('items.destroy', ['item' => $item]) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body text-center">
                            {{ $item->title }}を削除します。よろしいですか？
                        </div>
                        <div class="modal-footer justify-content-between">
                            <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                        <button type="submit" class="btn btn-danger">
                            削除する
                        </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- modal -->
        </div>
    </div>
@endif
