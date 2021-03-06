## 权限控制

- 控制说明
- 如何页面块/按钮自由控制显示权限
- 不进行权限认证的路由

> RageFrame已经内置Yii2的RBAC权限管理，并对其进行了二次开发，无限父子级权限分组、可自由分配子级权限

### 控制说明

可以把权限理解为一个大的库，往里面丢各种名称，可以是路由、自定义名称等

系统自定义了几个默认的名称

- cate:1 对应平台管理导航菜单
- cate:2 对应微信公众号导航菜单
- cate:3 对应系统管理导航菜单
- addons 对应应用中心导航菜单

> 为什么要密码为cate:1这种名称呢，因为是后面带的是菜单分类数据库自带的id，如果自己有改动比如删除后添加注意修改权限名称  


> 注意！！！  
> 注意！！！  
> 注意！！！  
>
> 权限的路由一定要包含菜单路由才会显示

### 如何页面块/按钮自由控制显示权限

按钮快捷方式：

- 系统下如果是按钮可以使用 [Html](helper-html.md) 辅助类
- 插件下如果是按钮可以使用 [Html](helper-addon-html.md) 辅助类

自定义验证如下：

- 系统下可以使用 [Auth](helper-auth.md) 辅助类
- 插件下可以使用 [Auth](helper-addon-auth.md) 辅助类

### 不进行权限认证的路由

> 修改地址 `backend/config/params` 找到 `noAuthRoute`

```
    /**
     * 不需要验证的路由全称
     *
     * 注意: 前面以绝对路径/为开头
     */
    'noAuthRoute' => [
        '/main/index',// 系统主页
        '/main/system',// 系统首页
        '/ueditor/index',// 百度编辑器配置及上传
        '/menu-provinces/index',// 微信个性化菜单省市区
        '/wechat/common/select-news',// 微信自动回复获取图文
        '/wechat/common/select-attachment',// 微信自动回复获取图片/视频/
        '/wechat/analysis/image',// 微信显示素材图片
        '/sys/style/update',// 系统主题更新
    ],
```
    



