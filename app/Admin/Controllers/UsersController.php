<?php

namespace App\Admin\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class UsersController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('用户详细信息')
            ->body(view('admin.users.show', ['user' => User::find($id)]));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑用户')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建用户')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected $title = '用户';

    protected function grid()
    {
        $grid = new Grid(new User);

        // 创建一个列名为 ID 的列，内容是用户的 id 字段
        $grid->id('ID');

        // 创建一个列名为 用户名 的列，内容是用户的 name 字段。下面的 email() 和 created_at() 同理
        $grid->name('用户名');

        $grid->email('邮箱');

        $grid->email_verified_at('已验证邮箱')->display(function ($value) {
            return $value ? '是' : '否';
        });

        $grid->created_at('注册时间');

//        // 不在页面显示 `新建` 按钮，因为我们不需要在后台新建用户
        $grid->disableCreateButton();

        //                                                              第一种写法
//        // 同时在每一行也不显示 `编辑` 按钮
//        $grid->disableActions();//6.0写法直接禁止操作列

        //                                                                  第二种写法
//          $grid->actions(function ($actions) {//5.8写法，禁用后面的操作，但是不禁用操作列
//            // 不在每一行后面展示查看按钮
//            $actions->disableView();
//            // 不在每一行后面展示删除按钮
//            $actions->disableDelete();
//            // 不在每一行后面展示编辑按钮
//            $actions->disableEdit();
//          });
        //
//        $grid->tools(function ($tools) {
//            // 禁用批量删除按钮
//            $tools->batch(function ($batch) {
//                $batch->disableDelete();
//            });
//        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->id('用户id');
        $show->name('姓名');
        $show->email('邮箱');
//        $show->email_verified_at('');
        $show->password('加密后密码');
//        $show->remember_token('Remember token');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User);

//        $form->text('name', '姓名');
//        $form->email('email', '邮箱');
//        $form->datetime('email_verified_at', '邮箱验证')->default(date('Y-m-d H:i:s'));
        $form->password('password', '密码');
//        $form->text('remember_token', 'token');

        return $form;
    }
}
