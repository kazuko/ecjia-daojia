<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.admin.cycleimage.init();
</script>
<!-- {/block} -->

<!-- {block name="main_content"} -->
<div>
	<h3 class="heading">
		<!-- {if $ur_here}{$ur_here}{/if} -->
		<!-- {if $action_link_special} -->
		<a class="btn plus_or_reply data-pjax" href="{$action_link_special.href}"  id="sticky_a"><i class="fontello-icon-plus"></i>{$action_link_special.text}</a>
		<!-- {/if} -->
	</h3>
</div>
<div class="row-fluid list-page">
	<div class="span12">
		<div class="">
			<div class="tab-content">
				<div class="tab-pane active">
					<table class="table table-striped table-hide-edit" data-rowlink="a">
						<thead>
							<tr>
								<th class="w180">{lang key='cycleimage::flashplay.thumbnail'}</th>
								<th>{lang key='cycleimage::flashplay.img_url'}</th>
								<th class="w70">{lang key='cycleimage::flashplay.schp_sort'}</th>
							</tr>
						</thead>
						<!-- {foreach from=$playerdb item=item key=key} -->
						<tr>
							<td>
								<a href="{$item.src}" title="Image 10" target="_blank">
									<img class="w150 h70" alt="{$item.src}" src="{$item.src}">
								</a>
							</td>
							<td class="hide-edit-area">
								<span><a href="{$item.url}" target="_blank">{$item.url}</a></span><br>
								{$item.text}
								<div class="edit-list">
									<a class="data-pjax" href='{RC_Uri::url("cycleimage/admin/edit", "id={$key}")}' title="{lang key='system::system.edit'}">{lang key='system::system.edit'}</a>&nbsp;|&nbsp;
									<a data-toggle="ajaxremove" class="ajaxremove ecjiafc-red" data-msg="{lang key='cycleimage::flashplay.trash_img_confirm'}" href='{RC_Uri::url("cycleimage/admin/del", "id={$key}")}' title="{lang key='system::system.remove'}">{lang key='system::system.drop'}</a>
							    </div>
							</td>
							<td><span class="edit_sort cursor_pointer" data-trigger="editable" data-url='{RC_Uri::url("cycleimage/admin/edit_sort", "id={$key}")}' data-name="sort" data-pk="{$key}" data-title="{lang key='cycleimage::flashplay.edit_cycle_sort'}">{$item.sort}</span></td>
						</tr>
						<!-- {foreachelse} -->
						   <tr><td class="no-records" colspan="3">{lang key='system::system.no_records'}</td></tr>
						<!-- {/foreach} -->
					</table>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- 轮播图预览隐藏区域 -->
<div class="modal hide fade" id="preview">
	<div class="modal-header">
		<button class="close" data-dismiss="modal">×</button>
		<h3>{lang key='cycleimage::flashplay.preview_style'}</h3>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
	</div>
</div>
<!-- {/block} -->