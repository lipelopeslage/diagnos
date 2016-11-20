var React = require('react');
var ReactDOM = require('react-dom');
var navigation = require('navigation');
var list = $('#highlights .the-holder');
var selected = null;

var resizeHandler = function(){
	var nav = $('.posts-nav .holder'), parent = nav.parent(),
		mt = (parent.outerHeight() - nav.outerHeight())*.5;
	navigation.resize($(window).width());
	nav.css({'margin-top':(mt+35)+'px'});
	resizeTexts();
	resizeVideos();
}

var Navigation = React.createClass({	
	getInitialState: function(){
		return {list: null};
	},
	deselectAll: function(){
		this.state.list.map(function(child){
			console.log(child, child.props)
		})
	},
	componentDidMount: function(){
		var navitems = [];
		for(var i = 0; i < parseInt(list.data('total')); i++){
			navitems.push(<NavItem deselectAll={this.deselectAll} deselect={null} title={i+1}/>);
		}
		this.setState({list: navitems});
		navigation.init(list);
	},
	render: function(){		
		return (<ul className="holder" >{this.state.list}</ul>);
	}
});

var NavItem = React.createClass({
	getInitialState: function(){
		return {selected: false};
	},
	componentDidMount: function(){
		if(this.props.title == '1'){
			this.clickHandler();
		}
	},
	clickHandler: function(){
		if(selected) selected.setState({selected: false});
		selected = this;
		navigation.goTo(parseInt(this.props.title)-1);
		this.setState({selected: true});		
	},
	render: function(){
		return (
			<li className={(this.state.selected == true) ? 'selected' : ''}><a onClick={this.clickHandler}><span className="text">{this.props.title}</span></a></li>
		);
	}
});

var resizeTexts = function(){
	var winW = $(window).width(), prop = winW/2560, titleSize = 232, titleLH = 180, excerptTop = -54, catsTop = 45, catsBottom = 76;
	prop = prop > 1 ? 1 : prop;
	list.find('.title').css({'font-size':(titleSize*prop)+'px', 'line-height':(titleLH*prop)+'px'});
	list.find('.cats').css({'padding-top':(catsTop*prop)+'px', 'padding-bottom':(catsBottom*prop)+'px'});
	list.find('.excerpt').css({'top':(excerptTop*prop)+'px'});
}

var resizeVideos = function(){
	var maxW = 2370, maxH = 900, video = $('#highlights .the-holder'), videoW = video.width(), videoH = video.height(),
		width, height, prop, top, left;

	prop = Math.max(videoW/maxW, videoH/maxH);

	width = ~~(maxW * prop);
	height = ~~(maxH * prop);
	top = ~~((height-videoH)*.5);
	left = ~~((width-videoW)*.5);

	video.find('video').css({
		'width': (width)+'px',
		'height': (height)+'px !important',
		'left': (left*-1)+'px',
		'top': (top*-1)+'px'
	});
}

module.exports.resize = resizeHandler;


$("#highlights .the-holder iframe").each(function(idx, itm){
	var video = $(itm);
	video.attr({'src': video.attr('src')+"??api=1&badge=0&portrait=0&title=0&byline=0&loop=1&color=333",'width':'100%', 'height': '100%'});
});

setTimeout(resizeVideos, 200);

ReactDOM.render(<Navigation/>, document.querySelector('.posts-nav'));