<?php
/**
 * The project module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: en.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
/* Fields. */
$lang->project->common        = $lang->projectCommon;
$lang->project->allProjects   = 'All ' . $lang->projectCommon . 's';
$lang->project->type          = 'Type';
$lang->project->name          = 'Name';
$lang->project->code          = 'Code';
$lang->project->begin         = 'Begin';
$lang->project->end           = 'End';
$lang->project->dateRange     = 'Duration';
$lang->project->to            = 'To';
$lang->project->days          = 'Available Days';
$lang->project->day           = ' Days';
$lang->project->workHour      = ' Hours';
$lang->project->totalHours    = 'Available Hours';
$lang->project->totalDays     = 'Available Days';
$lang->project->status        = 'Status';
$lang->project->desc          = 'Description';
$lang->project->owner         = 'Owner';
$lang->project->PO            = 'Project Owner';
$lang->project->PM            = 'Project Manager';
$lang->project->QD            = 'QA Manager';
$lang->project->RD            = 'Release Manager';
$lang->project->qa            = 'QA';
$lang->project->release       = 'Release';
$lang->project->acl           = 'ACL';
$lang->project->teamname      = 'Team Name';
$lang->project->order         = "Rank {$lang->projectCommon}";
$lang->project->products      = "Link {$lang->productCommon}";
$lang->project->whitelist     = 'Whitelist';
$lang->project->totalEstimate = 'Estimates';
$lang->project->totalConsumed = 'Cost';
$lang->project->totalLeft     = 'Left';
$lang->project->progress      = 'Progress';
$lang->project->hours         = 'Estimates: %s, Cost: %s, Left: %s.';
$lang->project->viewBug       = 'Bugs';
$lang->project->noProduct     = "No {$lang->productCommon} yet.";
$lang->project->createStory   = "Create Story";
$lang->project->all           = 'All ';
$lang->project->undone        = 'Unfinished';
$lang->project->unclosed      = 'Unclosed';
$lang->project->typeDesc      = 'No story, bug, build, test, or burndown chart is allowed in OPS';
$lang->project->mine          = 'My: ';
$lang->project->other         = 'Others:';
$lang->project->deleted       = 'Deleted';
$lang->project->delayed       = 'Delayed';
$lang->project->product       = $lang->project->products;
$lang->project->readjustTime  = "Adjust {$lang->projectCommon} Begin and End";
$lang->project->readjustTask  = 'Adjust Task Begin and End';
$lang->project->effort        = 'Effort';
$lang->project->relatedMember = 'Team Member';

$lang->project->start    = 'Start';
$lang->project->activate = 'Activate';
$lang->project->putoff   = 'Delay';
$lang->project->suspend  = 'Suspend';
$lang->project->close    = 'Close';
$lang->project->export   = 'Export';

$lang->project->typeList['sprint']    = 'Sprint';
$lang->project->typeList['waterfall'] = 'Waterfall';
$lang->project->typeList['ops']       = 'OPS';

$lang->project->endList[7]   = '1 Week';
$lang->project->endList[14]  = '2 Weeks';
$lang->project->endList[31]  = '1 Month';
$lang->project->endList[62]  = '2 Months';
$lang->project->endList[93]  = '3 Months';
$lang->project->endList[186] = '6 Months';
$lang->project->endList[365] = '1 Year';

$lang->team = new stdclass();
$lang->team->account    = 'Username';
$lang->team->role       = 'Role';
$lang->team->join       = 'Joined';
$lang->team->hours      = 'Hours/day';
$lang->team->days       = 'day';
$lang->team->totalHours = 'Total Hours';

$lang->team->limited            = 'Limited User';
$lang->team->limitedList['yes'] = 'Yes';
$lang->team->limitedList['no']  = 'No';

$lang->project->basicInfo = 'Basic Info';
$lang->project->otherInfo = 'Other Info';

/* 字段取值列表。*/
$lang->project->statusList['wait']      = 'Waiting';
$lang->project->statusList['doing']     = 'Doing';
$lang->project->statusList['suspended'] = 'Suspended';
$lang->project->statusList['closed']    = 'Closed';

$lang->project->aclList['open']    = "Default (Users who have the privilege to visit {$lang->projectCommon} can access it.)";
$lang->project->aclList['private'] = 'Private (For team members only.)';
$lang->project->aclList['custom']  = 'Whitelist (Team members and the whitelist members can access it.)';

/* 方法列表。*/
$lang->project->index             = "Home";
$lang->project->task              = 'Tasks';
$lang->project->groupTask         = 'Group View';
$lang->project->story             = 'Story';
$lang->project->bug               = 'Bug';
$lang->project->dynamic           = 'Dynamics';
$lang->project->latestDynamic     = 'Latest Dynamics';
$lang->project->build             = 'Build';
$lang->project->testtask          = 'Request';
$lang->project->burn              = 'Burndown';
$lang->project->computeBurn       = 'Update';
$lang->project->burnData          = 'Burndown Data';
$lang->project->fixFirst          = 'Edit Estimates of 1st Day';
$lang->project->team              = 'Team Member';
$lang->project->doc               = 'Doc';
$lang->project->doclib            = 'Doc Library';
$lang->project->manageProducts    = 'Link ' . $lang->productCommon . 's';
$lang->project->linkStory         = 'Link Story';
$lang->project->linkStoryByPlan   = 'Link Story From Plan';
$lang->project->linkPlan          = 'Link Plan';
$lang->project->unlinkStoryTasks  = 'Unlink';
$lang->project->linkedProducts    = 'Linked Products';
$lang->project->unlinkedProducts  = 'Unlinked Products';
$lang->project->view              = "Overview";
$lang->project->create            = "Create {$lang->projectCommon}";
$lang->project->copy              = "Copy {$lang->projectCommon}";
$lang->project->delete            = "Delete";
$lang->project->browse            = "Browse";
$lang->project->edit              = "Edit";
$lang->project->batchEdit         = "Batch Edit";
$lang->project->manageMembers     = 'Manage Team';
$lang->project->unlinkMember      = 'Remove Member';
$lang->project->unlinkStory       = 'Unlink Story';
$lang->project->batchUnlinkStory  = 'Batch Unlink Stories';
$lang->project->importTask        = 'Transfer Task';
$lang->project->importPlanStories = 'Link Story From Plan';
$lang->project->importBug         = 'Import Bug';
$lang->project->updateOrder       = 'Rank';
$lang->project->tree              = 'Tree';
$lang->project->treeTask          = 'Show Task';
$lang->project->treeStory         = 'Show Story';
$lang->project->treeOnlyTask      = 'Task Only';
$lang->project->treeOnlyStory     = 'Story Only';
$lang->project->storyKanban       = 'Story Kanban';
$lang->project->storySort         = 'Sort Story';
$lang->project->importPlanStory   = '' . $lang->projectCommon . ' is created!\nDo you want to import stories that have been linked to the plan?';
$lang->project->iteration         = 'Iterations';
$lang->project->iterationInfo     = '%s Iterations';
$lang->project->viewAll           = 'View All';

/* 分组浏览。*/
$lang->project->allTasks     = 'All';
$lang->project->assignedToMe = 'My';
$lang->project->myInvolved   = 'Involved';

$lang->project->statusSelects['']             = 'More';
$lang->project->statusSelects['wait']         = 'Waiting';
$lang->project->statusSelects['doing']        = 'Doing';
$lang->project->statusSelects['finishedbyme'] = 'FinishedByMe';
$lang->project->statusSelects['done']         = 'Done';
$lang->project->statusSelects['closed']       = 'Closed';
$lang->project->statusSelects['cancel']       = 'Cancelled';

$lang->project->groups['']           = 'View by Groups';
$lang->project->groups['story']      = 'Group by Story';
$lang->project->groups['status']     = 'Group by Status';
$lang->project->groups['pri']        = 'Group by Priority';
$lang->project->groups['assignedTo'] = 'Group by AssignedTo';
$lang->project->groups['finishedBy'] = 'Group by FinishedBy';
$lang->project->groups['closedBy']   = 'Group by ClosedBy';
$lang->project->groups['type']       = 'Group by Type';

$lang->project->groupFilter['story']['all']         = $lang->project->all;
$lang->project->groupFilter['story']['linked']      = 'LinkedtoStory Task';
$lang->project->groupFilter['pri']['all']           = $lang->project->all;
$lang->project->groupFilter['pri']['noset']         = 'Not Set';
$lang->project->groupFilter['assignedTo']['undone'] = 'Unfinished';
$lang->project->groupFilter['assignedTo']['all']    = $lang->project->all;

$lang->project->byQuery = 'Search';

/* 查询条件列表。*/
$lang->project->allProject      = "All {$lang->projectCommon}s";
$lang->project->aboveAllProduct = "All the above {$lang->productCommon}s";
$lang->project->aboveAllProject = "All the above {$lang->projectCommon}s";

/* 页面提示。*/
$lang->project->linkStoryByPlanTips = "This action will link all stories in this plan to the {$lang->projectCommon}.";
$lang->project->selectProject       = "Select {$lang->projectCommon}";
$lang->project->beginAndEnd         = 'Duration';
$lang->project->begin               = 'Begin';
$lang->project->end                 = 'End';
$lang->project->lblStats            = 'Total Hours(h): ';
$lang->project->stats               = 'Available: <strong>%s</strong>(h), Estimates: <strong>%s</strong>(h), Cost: <strong>%s</strong>(h), Left: <strong>%s</strong>(h).';
$lang->project->taskSummary         = "Total <strong>%s</strong> tasks on this page. Waiting: <strong>%s</strong>. Doing: <strong>%s</strong>.  &nbsp;&nbsp;&nbsp;  Estimates: <strong>%s</strong>(h). Cost: <strong>%s</strong>(h). Left: <strong>%s</strong>(h).";
$lang->project->checkedSummary      = "Selected: <strong>%total%</strong>. Wait:<strong>%wait%</strong>. Doing: <strong>%doing%</strong>.    Estimates: <strong>%estimate%</strong>(h). Cost: <strong>%consumed%</strong>(h). Left: <strong>%left%</strong>(h).";
$lang->project->memberHoursAB       = "%s has <strong>%s</ strong> hours.";
$lang->project->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Available Hours</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tasks</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Doing</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Waiting</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->project->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Estimates</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Cost</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Left</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->groupSummaryAB      = "<div>Tasks <strong>%s ：</strong><span class='text-muted'>Waiting</span> %s &nbsp; <span class='text-muted'>Doing</span> %s</div><div>Estimates <strong>%s ：</strong><span class='text-muted'>Cost</span> %s &nbsp; <span class='text-muted'>Left</span> %s</div>";
$lang->project->wbs                 = "Decompose Task";
$lang->project->batchWBS            = "Batch Decompose";
$lang->project->howToUpdateBurn     = "<a href='https://api.zentao.pm/goto.php?item=burndown' target='_blank' title='How to update the Burndown Chart?' class='btn btn-link'>Help <i class='icon icon-help'></i></a>";
$lang->project->whyNoStories        = "No story can be linked. Please check whether there is any story in {$lang->projectCommon} which is linked to {$lang->productCommon} and make sure it has been reviewed.";
$lang->project->productStories      = "Stories linked to {$lang->projectCommon} are the subeset of stories linked to {$lang->productCommon}. Stories can only be linked after they pass the review. <a href='%s'> Link Story</a> now.";
$lang->project->haveDraft           = "%s stories in draft, so they can't be linked.";
$lang->project->doneProjects        = 'Done';
$lang->project->selectDept          = 'Select Department';
$lang->project->selectDeptTitle     = 'Select User';
$lang->project->copyTeam            = 'Copy Team';
$lang->project->copyFromTeam        = "Copy from {$lang->projectCommon} Team: <strong>%s</strong>";
$lang->project->noMatched           = "No $lang->projectCommon including '%s'can be found.";
$lang->project->copyTitle           = "Choose a {$lang->projectCommon} to copy.";
$lang->project->copyTeamTitle       = "Choose a {$lang->projectCommon}Team to copy.";
$lang->project->copyNoProject       = "No {$lang->projectCommon} can be copied.";
$lang->project->copyFromProject     = "Copy from {$lang->projectCommon} <strong>%s</strong>";
$lang->project->cancelCopy          = 'Cancel Copy';
$lang->project->byPeriod            = 'By Time';
$lang->project->byUser              = 'By User';
$lang->project->noProject           = "No {$lang->projectCommon}. ";
$lang->project->noMembers           = 'No members. ';

/* 交互提示。*/
$lang->project->confirmDelete         = "Do you want to delete the {$lang->projectCommon}[%s]?";
$lang->project->confirmUnlinkMember   = "Do you want to unlink this User from {$lang->projectCommon}?";
$lang->project->confirmUnlinkStory    = "Do you want to unlink this Story from {$lang->projectCommon}?";
$lang->project->errorNoLinkedProducts = "No {$lang->productCommon} is linked to {$lang->projectCommon}. You will be directed to {$lang->productCommon} page to link one.";
$lang->project->errorSameProducts     = "{$lang->projectCommon} cannot be linked to the same {$lang->productCommon} twice.";
$lang->project->accessDenied          = "Your access to {$lang->projectCommon} is denied!";
$lang->project->tips                  = 'Note';
$lang->project->afterInfo             = "{$lang->projectCommon} is created. Next you can ";
$lang->project->setTeam               = 'Set Team';
$lang->project->linkStory             = 'Link Story';
$lang->project->createTask            = 'Create Task';
$lang->project->goback                = "Go Back";
$lang->project->noweekend             = 'excl. Weekend';
$lang->project->withweekend           = 'incl. Weekend';
$lang->project->interval              = 'Intervals';
$lang->project->fixFirstWithLeft      = 'Edit Hours Left';

$lang->project->action = new stdclass();
$lang->project->action->opened  = '$date, created by <strong>$actor</strong> .' . "\n";
$lang->project->action->managed = '$date, managed by <strong>$actor</strong> .' . "\n";
$lang->project->action->extra   = 'The linked products are %s.';

/* 统计。*/
$lang->project->charts = new stdclass();
$lang->project->charts->burn = new stdclass();
$lang->project->charts->burn->graph = new stdclass();
$lang->project->charts->burn->graph->caption      = " Burndown Chart";
$lang->project->charts->burn->graph->xAxisName    = "Date";
$lang->project->charts->burn->graph->yAxisName    = "Hour";
$lang->project->charts->burn->graph->baseFontSize = 12;
$lang->project->charts->burn->graph->formatNumber = 0;
$lang->project->charts->burn->graph->animation    = 0;
$lang->project->charts->burn->graph->rotateNames  = 1;
$lang->project->charts->burn->graph->showValues   = 0;
$lang->project->charts->burn->graph->reference    = 'Ideal';
$lang->project->charts->burn->graph->actuality    = 'Actual';

$lang->project->placeholder = new stdclass();
$lang->project->placeholder->code      = "Abbreviation of {$lang->projectCommon} name";
$lang->project->placeholder->totalLeft = "Estimates at the beginning of the {$lang->projectCommon}.";

$lang->project->selectGroup = new stdclass();
$lang->project->selectGroup->done = '(Done)';

$lang->project->orderList['order_asc']  = "Story Rank ASC";
$lang->project->orderList['order_desc'] = "Story Rank DESC";
$lang->project->orderList['pri_asc']    = "Story Priority ASC";
$lang->project->orderList['pri_desc']   = "Story Priority DESC";
$lang->project->orderList['stage_asc']  = "Story Phase ASC";
$lang->project->orderList['stage_desc'] = "Story Phase DESC";

$lang->project->kanban        = "Kanban";
$lang->project->kanbanSetting = "Settings";
$lang->project->resetKanban   = "Reset";
$lang->project->printKanban   = "Print";
$lang->project->bugList       = "Bugs";

$lang->project->kanbanHideCols   = 'Closed and Cancelled columns';
$lang->project->kanbanShowOption = 'Unfold';
$lang->project->kanbanColsColor  = 'Customize column color';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Do you want to reset Kanban?';
$lang->kanbanSetting->optionList['0'] = 'Hide';
$lang->kanbanSetting->optionList['1'] = 'Show';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Print Kanban';
$lang->printKanban->content = 'Content';
$lang->printKanban->print   = 'Print';

$lang->printKanban->taskStatus = 'Status';

$lang->printKanban->typeList['all']       = 'All';
$lang->printKanban->typeList['increment'] = 'Increment';

$lang->project->featureBar['task']['all']          = $lang->project->allTasks;
$lang->project->featureBar['task']['unclosed']     = $lang->project->unclosed;
$lang->project->featureBar['task']['assignedtome'] = $lang->project->assignedToMe;
$lang->project->featureBar['task']['myinvolved']   = $lang->project->myInvolved;
$lang->project->featureBar['task']['delayed']      = 'Delayed';
$lang->project->featureBar['task']['needconfirm']  = 'Changed';
$lang->project->featureBar['task']['status']       = $lang->project->statusSelects[''];

$lang->project->treeLevel = array();
$lang->project->treeLevel['all']   = 'Expand All';
$lang->project->treeLevel['root']  = 'Collapse All';
$lang->project->treeLevel['story'] = 'Show Story';
$lang->project->treeLevel['task']  = 'Show Task';

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->project->groups['story']);
    unset($lang->project->featureBar['task']['needconfirm']);
}
