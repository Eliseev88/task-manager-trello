@foreach($tasks as $task => $item)
    <div class="board-column">

        <div class="board-column_title">
            <p class="">{{$task}}</p>
            <a aria-current="page" class="" href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>

    @foreach($item as $key => $taskObject)

            <div class="board-column_task">
                <div class="task-title">
                    <a href="#">{{$taskObject->name}}</a>
                    <a aria-current="page" class="" href="#">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                </div>

                <div class="task-description">
                    <p>
                        {{$taskObject->description}}
                    </p>
                </div>

                <div class="task-info">
                    <a href="#">
                        <img alt="" class="rounded" height="48" src="https://githut.com/mdo.png" width="48">
                    </a>

                    <a href="#" aria-current="page" class="">
                        <i class="far fa-comments"></i>
                        <span class="">99+</span>
                    </a>

                    <a href="#" aria-current="page" class="">
                        <i class="fas fa-paperclip"></i>
                        <span class="">5+</span>
                    </a>

                    <div class="task-info_status">
                        <span class="">Статус {{$taskObject->task_status}}</span>
                    </div>
                </div>
            </div>
    @endforeach

                <!-- стандартная задача с описанием-->
                <div class="board-column_addTask">
                    <a class="#">
                        <i class="fas fa-plus-square"></i>
                            Добавить задачу
                            </a>
                </div>

            </div>
@endforeach
