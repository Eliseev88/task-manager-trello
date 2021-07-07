@foreach($tasks as $task => $item)

    <div class="board-column">

        <div class="board-column_title">
            <p class="">{{$task}}</p>
            <a aria-current="page" class="" href="#">
                <i class="fas fa-ellipsis-h"></i>
            </a>
        </div>

    @foreach($item as $key => $taskObject)
            @php
            //dd($taskObject);
            @endphp
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
                <div class="board-column_addTask">
                    <a class="addtask" data-id="{{$task}}" style="cursor: pointer">
                        <i class="fas fa-plus-square"></i>
                            Добавить задачу
                            </a>
                </div>

        <form action="{{route('tasks::create')}}" class="taskform" method="get" style="visibility:hidden">
                <div class="title">
                <input type="text" name="name"
                       style="background: #414141;
                       border-radius: 10px;
                       padding: 10px;
                       margin: 5px 5px 10px 5px;
                       width: 96%;"
                       >
                </div>

            <div>
                <div class="add_task">
                    <div class="topic_description_task">
                        <textarea

                            style="background: #414141;
                                   border-radius: 10px;
                                   padding: 10px;
                                   margin: 5px 5px 10px 5px;"
                            name="description" id="description" cols="24" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="task_topics_id" value="{{$taskObject->task_topics_id}}">
            <input type="hidden" name="executor_id" value="{{$user}}">
            <input type="hidden" name="initiator_id" value="{{$user}}">
            <input type="hidden" name="board_id" value="{{$taskObject->board_id}}">
            <input type="submit" value="Сохранить"  style="width: 96%;
                                                    padding: 10px;
                                                    margin: 5px 5px 10px 5px;
                                                    background: #32b9a1;
                                                    border-radius: 10px;">
        </form>
    </div>


@endforeach

