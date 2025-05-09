<?php

namespace Slowlyo\OwlAdmin\Renderers;

/**
 * CRUD2List
 * 
 * @author slowlyo
 * @version 6.12.0
 */
class CRUD2List extends BaseRenderer
{
    public function __construct()
    {
        $this->set('mode', 'list');
$this->set('type', 'crud2');


    }

    /**
     * 是否固底
     */
    public function affixFooter($value = true)
    {
        return $this->set('affixFooter', $value);
    }

    /**
     * 是否固顶
     */
    public function affixHeader($value = true)
    {
        return $this->set('affixHeader', $value);
    }

    /**
     * 初始化数据 API (初始化数据 API)
     */
    public function api($value = '')
    {
        return $this->set('api', $value);
    }

    /**
     * 内容区域占满屏幕剩余空间
     */
    public function autoFillHeight($value = true)
    {
        return $this->set('autoFillHeight', $value);
    }

    /**
     * 是否自动跳顶部，当切分页的时候。
     */
    public function autoJumpToTopOnPagerChange($value = true)
    {
        return $this->set('autoJumpToTopOnPagerChange', $value);
    }

    /**
     * 点击列表单行时，是否选择
     */
    public function checkOnItemClick($value = true)
    {
        return $this->set('checkOnItemClick', $value);
    }

    /**
     * 容器 css 类名 (css类名，配置字符串，或者对象。    className: "red"用对象配置时意味着你能跟表达式一起搭配使用，如：    className: {         "red": "data.progress > 80",         "blue": "data.progress > 60"     })
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 是否禁用
     */
    public function disabled($value = true)
    {
        return $this->set('disabled', $value);
    }

    /**
     * 是否禁用表达式 (表达式，语法 `data.xxx > 5`。)
     */
    public function disabledOn($value = '')
    {
        return $this->set('disabledOn', $value);
    }

    /**
     * 编辑器配置，运行时可以忽略
     */
    public function editorSetting($value = '')
    {
        return $this->set('editorSetting', $value);
    }

    /**
     * 底部区域 (底部区域)
     */
    public function footer($value = '')
    {
        return $this->set('footer', $value);
    }

    /**
     * 底部区域类名 (css类名，配置字符串，或者对象。    className: "red"用对象配置时意味着你能跟表达式一起搭配使用，如：    className: {         "red": "data.progress > 80",         "blue": "data.progress > 60"     })
     */
    public function footerClassName($value = '')
    {
        return $this->set('footerClassName', $value);
    }

    /**
     * 底部区域 (底部区域)
     */
    public function footerToolbar($value = '')
    {
        return $this->set('footerToolbar', $value);
    }

    /**
     * 底部区域CSS类名
     */
    public function footerToolbarClassName($value = '')
    {
        return $this->set('footerToolbarClassName', $value);
    }

    /**
     * 顶部区域 (顶部区域)
     */
    public function header($value = '')
    {
        return $this->set('header', $value);
    }

    /**
     * 顶部区域类名 (css类名，配置字符串，或者对象。    className: "red"用对象配置时意味着你能跟表达式一起搭配使用，如：    className: {         "red": "data.progress > 80",         "blue": "data.progress > 60"     })
     */
    public function headerClassName($value = '')
    {
        return $this->set('headerClassName', $value);
    }

    /**
     * 顶部区域 (顶部区域)
     */
    public function headerToolbar($value = '')
    {
        return $this->set('headerToolbar', $value);
    }

    /**
     * 顶部区域CSS类名
     */
    public function headerToolbarClassName($value = '')
    {
        return $this->set('headerToolbarClassName', $value);
    }

    /**
     * 是否隐藏
     */
    public function hidden($value = true)
    {
        return $this->set('hidden', $value);
    }

    /**
     * 是否隐藏表达式 (表达式，语法 `data.xxx > 5`。)
     */
    public function hiddenOn($value = '')
    {
        return $this->set('hiddenOn', $value);
    }

    /**
     * 是否隐藏勾选框
     */
    public function hideCheckToggler($value = true)
    {
        return $this->set('hideCheckToggler', $value);
    }

    /**
     * 是否隐藏快速编辑的按钮。
     */
    public function hideQuickSaveBtn($value = true)
    {
        return $this->set('hideQuickSaveBtn', $value);
    }

    /**
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 索引条偏移量
     */
    public function indexBarOffset($value = '')
    {
        return $this->set('indexBarOffset', $value);
    }

    /**
     * 索引依据字段
     */
    public function indexField($value = '')
    {
        return $this->set('indexField', $value);
    }

    /**
     * 设置自动刷新时间
     */
    public function interval($value = '')
    {
        return $this->set('interval', $value);
    }

    /**
     * 点击列表项的行为 (点击列表项的行为)
     */
    public function itemAction($value = '')
    {
        return $this->set('itemAction', $value);
    }

    /**
     * 约束批量操作
     */
    public function itemCheckableOn($value = '')
    {
        return $this->set('itemCheckableOn', $value);
    }

    /**
     * 配置某项是否可拖拽排序，前提是要开启拖拽功能 (表达式，语法 `data.xxx > 5`。)
     */
    public function itemDraggableOn($value = '')
    {
        return $this->set('itemDraggableOn', $value);
    }

    /**
     * 翻页时是否保留用户已选的数据
     */
    public function keepItemSelectionOnPageChange($value = true)
    {
        return $this->set('keepItemSelectionOnPageChange', $value);
    }

    /**
     * 单条数据展示内容配置 (单条数据展示内容配置)
     */
    public function listItem($value = '')
    {
        return $this->set('listItem', $value);
    }

    /**
     * 是否为前端单次加载模式，可以用来实现前端分页。
     */
    public function loadDataOnce($value = true)
    {
        return $this->set('loadDataOnce', $value);
    }

    /**
     * 数据展示模式 无限加载 or 分页 可选值: more | pagination
     */
    public function loadType($value = '')
    {
        return $this->set('loadType', $value);
    }

    /**
     * 
     */
    public function loadingConfig($value = '')
    {
        return $this->set('loadingConfig', $value);
    }

    /**
     * 指定内容区的展示模式。
     */
    public function mode($value = 'list')
    {
        return $this->set('mode', $value);
    }

    /**
     * 是否可以多选数据，仅当selectable为 true 时生效
     */
    public function multiple($value = true)
    {
        return $this->set('multiple', $value);
    }

    /**
     * 组件名字，这个名字可以用来定位，用于组件通信
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 设置分页页码字段名。
     */
    public function pageField($value = '')
    {
        return $this->set('pageField', $value);
    }

    /**
     * 是否开启Query信息转换，开启后将会对url中的Query进行转换，默认开启，默认仅转化布尔值
     */
    public function parsePrimitiveQuery($value = '')
    {
        return $this->set('parsePrimitiveQuery', $value);
    }

    /**
     * 无限加载时，根据此项设置其每页加载数量，可以不限制
     */
    public function perPage($value = '')
    {
        return $this->set('perPage', $value);
    }

    /**
     * 设置分页一页显示的多少条数据的字段名。
     */
    public function perPageField($value = '')
    {
        return $this->set('perPageField', $value);
    }

    /**
     * 无数据提示 (支持两种语法，但是不能混着用。分别是：1. `${xxx}` 或者 `${xxx|upperCase}` 2. `<%= data.xxx %>`
更多文档：https://aisuda.bce.baidu.com/amis/zh-CN/docs/concepts/template)
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 行标识符，默认为id
     */
    public function primaryField($value = '')
    {
        return $this->set('primaryField', $value);
    }

    /**
     * 下拉刷新配置
     */
    public function pullRefresh($value = '')
    {
        return $this->set('pullRefresh', $value);
    }

    /**
     * 快速编辑后用来批量保存的 API (快速编辑后用来批量保存的 API)
     */
    public function quickSaveApi($value = '')
    {
        return $this->set('quickSaveApi', $value);
    }

    /**
     * 快速编辑配置成及时保存时使用的 API (快速编辑配置成及时保存时使用的 API)
     */
    public function quickSaveItemApi($value = '')
    {
        return $this->set('quickSaveItemApi', $value);
    }

    /**
     * 保存排序的 api (保存排序的 api)
     */
    public function saveOrderApi($value = '')
    {
        return $this->set('saveOrderApi', $value);
    }

    /**
     * 是否可以选择数据，外部事件动作
     */
    public function selectable($value = true)
    {
        return $this->set('selectable', $value);
    }

    /**
     * 是否显示底部
     */
    public function showFooter($value = true)
    {
        return $this->set('showFooter', $value);
    }

    /**
     * 是否显示头部
     */
    public function showHeader($value = true)
    {
        return $this->set('showHeader', $value);
    }

    /**
     * 是否显示右侧字母索引条
     */
    public function showIndexBar($value = true)
    {
        return $this->set('showIndexBar', $value);
    }

    /**
     * 是否展示已选数据区域，仅当selectable为 true 时生效
     */
    public function showSelection($value = true)
    {
        return $this->set('showSelection', $value);
    }

    /**
     * 静默拉取
     */
    public function silentPolling($value = true)
    {
        return $this->set('silentPolling', $value);
    }

    /**
     * 大小 可选值: sm | base
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 也可以直接从环境变量中读取，但是不太推荐。 (也可以直接从环境变量中读取，但是不太推荐。)
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 是否静态展示
     */
    public function static($value = true)
    {
        return $this->set('static', $value);
    }

    /**
     * 静态展示表单项类名 (css类名，配置字符串，或者对象。    className: "red"用对象配置时意味着你能跟表达式一起搭配使用，如：    className: {         "red": "data.progress > 80",         "blue": "data.progress > 60"     })
     */
    public function staticClassName($value = '')
    {
        return $this->set('staticClassName', $value);
    }

    /**
     * 静态展示表单项Value类名 (css类名，配置字符串，或者对象。    className: "red"用对象配置时意味着你能跟表达式一起搭配使用，如：    className: {         "red": "data.progress > 80",         "blue": "data.progress > 60"     })
     */
    public function staticInputClassName($value = '')
    {
        return $this->set('staticInputClassName', $value);
    }

    /**
     * 静态展示表单项Label类名 (css类名，配置字符串，或者对象。    className: "red"用对象配置时意味着你能跟表达式一起搭配使用，如：    className: {         "red": "data.progress > 80",         "blue": "data.progress > 60"     })
     */
    public function staticLabelClassName($value = '')
    {
        return $this->set('staticLabelClassName', $value);
    }

    /**
     * 是否静态展示表达式 (表达式，语法 `data.xxx > 5`。)
     */
    public function staticOn($value = '')
    {
        return $this->set('staticOn', $value);
    }

    /**
     * 静态展示空值占位
     */
    public function staticPlaceholder($value = '')
    {
        return $this->set('staticPlaceholder', $value);
    }

    /**
     * 
     */
    public function staticSchema($value = '')
    {
        return $this->set('staticSchema', $value);
    }

    /**
     * 表达式，语法 `data.xxx > 5`。
     */
    public function stopAutoRefreshWhen($value = '')
    {
        return $this->set('stopAutoRefreshWhen', $value);
    }

    /**
     * 组件样式
     */
    public function style($value = '')
    {
        return $this->set('style', $value);
    }

    /**
     * 是否将过滤条件的参数同步到地址栏,默认为true
     */
    public function syncLocation($value = true)
    {
        return $this->set('syncLocation', $value);
    }

    /**
     * 是否将接口返回的内容自动同步到地址栏，前提是开启了同步地址栏。
     */
    public function syncResponse2Query($value = true)
    {
        return $this->set('syncResponse2Query', $value);
    }

    /**
     * 
     */
    public function testIdBuilder($value = '')
    {
        return $this->set('testIdBuilder', $value);
    }

    /**
     * 
     */
    public function testid($value = '')
    {
        return $this->set('testid', $value);
    }

    /**
     * 标题 (支持两种语法，但是不能混着用。分别是：1. `${xxx}` 或者 `${xxx|upperCase}` 2. `<%= data.xxx %>`
更多文档：https://aisuda.bce.baidu.com/amis/zh-CN/docs/concepts/template)
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 指定为 CRUD2 渲染器。
     */
    public function type($value = 'crud2')
    {
        return $this->set('type', $value);
    }

    /**
     * 可以组件级别用来关闭移动端样式
     */
    public function useMobileUI($value = true)
    {
        return $this->set('useMobileUI', $value);
    }

    /**
     * 可以用来作为值的字段
     */
    public function valueField($value = '')
    {
        return $this->set('valueField', $value);
    }

    /**
     * 是否显示
     */
    public function visible($value = true)
    {
        return $this->set('visible', $value);
    }

    /**
     * 是否显示表达式 (表达式，语法 `data.xxx > 5`。)
     */
    public function visibleOn($value = '')
    {
        return $this->set('visibleOn', $value);
    }


}
