<?php

class BaldursPhotographySnowStorm extends KokenPlugin {

	function __construct()
	{
		$this->require_setup = false;
		$this->register_hook('before_closing_head', 'render');
	}

	function render()
	{

		$excludeMobile		= $this->data->snowStorm_mobile;
		$flakesMax			= $this->data->snowStorm_flakemax;
		$flakesMaxActive	= $this->data->snowStorm_flakemaxactive;
		$animationInterval	= $this->data->snowStorm_animationinterval;
		$useGPU				= $this->data->snowStorm_gpu;
		$flakeBottom		= $this->data->snowStorm_flakebottom;
		$followMouse		= $this->data->snowStorm_followmouse;
		$snowColor			= $this->data->snowStorm_color;
		$snowCharacter		= $this->data->snowStorm_char;
		$snowStick			= $this->data->snowStorm_snowstick;
		$targetElement		= $this->data->snowStorm_targetelement;
		$useMeltEffect		= $this->data->snowStorm_usemelteffect;
		$useTwinkleEffect	= $this->data->snowStorm_twinkeleffect;
		$usePositionFixed	= $this->data->snowStorm_positionfixed;
		$usePixelPosition	= $this->data->snowStorm_pixelposition;
		$freezeOnBlur		= $this->data->snowStorm_freezeonblur;
		$flakeLeftOffset	= $this->data->snowStorm_flakeleftoffset;
		$flakeRightOffset	= $this->data->snowStorm_flakerightoffset;
		$flakeWidth			= $this->data->snowStorm_flakewidth;
		$flakeHeight		= $this->data->snowStorm_flakeheight;
		$vMaxX				= $this->data->snowStorm_vmaxx;
		$vMaxY				= $this->data->snowStorm_vmaxy;
		$zIndex				= $this->data->snowStorm_zindex;
		$path				= $this->get_path();

echo <<<OUT
<script type="text/javascript" src="{$path}/snowstorm.js"></script>
<script type="text/javascript">
snowStorm.autoStart = true;
snowStorm.excludeMobile = {$excludeMobile}; 
snowStorm.flakesMax = {$flakesMax};
snowStorm.flakesMaxActive = {$flakesMaxActive};
snowStorm.animationInterval = {$animationInterval};
snowStorm.useGPU = {$useGPU};
snowStorm.flakeBottom = {$flakeBottom};
snowStorm.followMouse = {$followMouse}; 
snowStorm.snowColor = '{$snowColor}';
snowStorm.snowCharacter = '{$snowCharacter}'
snowStorm.snowStick = {$snowStick};
snowStorm.targetElement = {$targetElement};
snowStorm.useMeltEffect = {$useMeltEffect};
snowStorm.useTwinkleEffect = {$useTwinkleEffect};
snowStorm.usePositionFixed = {$usePositionFixed};
snowStorm.usePixelPosition = {$usePixelPosition};
snowStorm.freezeOnBlur = {$freezeOnBlur};
snowStorm.flakeLeftOffset = {$flakeLeftOffset}; 
snowStorm.flakeRightOffset = {$flakeRightOffset};
snowStorm.flakeWidth = {$flakeWidth};
snowStorm.flakeHeight = {$flakeHeight};
snowStorm.vMaxX = {$vMaxX};
snowStorm.vMaxY = {$vMaxY};
snowStorm.zIndex = {$zIndex};
</script>
OUT;
	}
}
