/************************
 * 						*
 *     面相对象之拖拽        *
 *       By XF	        *
 ************************/

window.onload = function(){
	var drag = new Drag("main");//创建一个新的拖拽对象
		drag.init();	//初始化
};
//构造拖拽函数Drag
function Drag(id){
	this.obj = document.getElementById(id);
	this.disX = 0;
	this.disY = 0;
}
Drag.prototype.init = function (){
    // this指针
    var me = this;
    this.obj.onmousedown = function (e){
        var e = e || event;
        me.mouseDown(e);
        // 阻止默认事件
        return false;
    };
};
Drag.prototype.mouseDown = function (e){
    // this指针
    var me = this;
    this.disX = e.clientX - this.obj.offsetLeft;
    this.disY = e.clientY - this.obj.offsetTop;
    document.onmousemove = function (e){
        var e = e || window.event;
        me.mouseMove(e);
    };  
    document.onmouseup = function (){
        me.mouseUp();
    }
};
Drag.prototype.mouseMove = function (e){
    this.obj.style.left = (e.clientX - this.disX) + 'px';
    this.obj.style.top = (e.clientY - this.disY) + 'px';
    var LLL = document.getElementById("left");
	var TTT = document.getElementById("top");
	LLL.innerHTML = (e.clientX - this.disX) + 'px';
	TTT.innerHTML = (e.clientY - this.disY) + 'px';
};
Drag.prototype.mouseUp = function (){
    document.onmousemove = null;
    document.onmouseup = null;
};

