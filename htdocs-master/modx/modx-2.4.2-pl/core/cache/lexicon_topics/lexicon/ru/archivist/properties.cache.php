<?php  return array (
  'prop_archivist.tpl_desc' => 'Name of a Chunk that will be used for each result.',
  'prop_archivist.target_desc' => 'The target Resource to point the archive links to. Will default to the current Resource.',
  'prop_archivist.parents_desc' => 'Optional. Comma-delimited list of ids serving as parents. Will default to the current Resource otherwise.',
  'prop_archivist.exclude_desc' => 'Optional. Comma-delimited list of ids to exclude from results. Defaults to none.',
  'prop_archivist.depth_desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
  'prop_archivist.sortby_desc' => 'Field to sort by. Defaults to publishedon.',
  'prop_archivist.sortdir_desc' => 'Order which to sort by. Defaults to DESC.',
  'prop_archivist.limit_desc' => 'Limits the number of resources returned. Defaults to 10.',
  'prop_archivist.start_desc' => 'Optional. An offset of resources returned by the criteria to skip.',
  'prop_archivist.usemonth_desc' => 'If 1, will use the month in the archive list.',
  'prop_archivist.useday_desc' => 'If 1, will use the day in the archive list.',
  'prop_archivist.dateformat_desc' => 'Optional. The date format, according to MySQL DATE_FORMAT() syntax, for each row. If blank, Archivist will calculate this automatically.',
  'prop_archivist.usefurls_desc' => 'If true, will generate links in pretty Friendly URL format.',
  'prop_archivist.persistgetparams_desc' => 'If true, links generated will persist the GET params of the page they are on. Not recommended.',
  'prop_archivist.extraparams_desc' => 'Optional. If specified, will attach this to the URL of each row.',
  'prop_archivist.cls_desc' => 'A CSS class to add to each row.',
  'prop_archivist.altcls_desc' => 'A CSS class to add to each alternate row.',
  'prop_archivist.firstcls_desc' => 'Optional. A CSS class to add to the first row. If empty will ignore.',
  'prop_archivist.lastcls_desc' => 'Optional. A CSS class to add to the last row. If empty will ignore.',
  'prop_archivist.filterprefix_desc' => 'The prefix to use for GET parameters with the Archivist links. Make sure this is the same as the filterPrefix parameter on the getArchives snippet call.',
  'prop_archivist.toplaceholder_desc' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
  'prop_archivist.setlocale_desc' => 'If 1, Archivist will run the setlocale function with your cultureKey setting if your cultureKey is not "en".',
  'prop_archivist.locale_desc' => 'If this is set and setLocale is 1, will use this value instead of the cultureKey setting to set the locale by.',
  'prop_archivist.hidecontainers_desc' => 'If 1, will not show Containers in the results.',
  'prop_archivist.groupbyyear_desc' => 'If 1, Archivist will attempt to group the results by year and display results in a nested list.',
  'prop_archivist.groupbyyeartpl_desc' => 'The Chunk to use for the wrapper when grouping by year.',
  'prop_getarchives.tpl_desc' => 'Name of a chunk serving as a resource template.',
  'prop_getarchives.filterfield_desc' => 'The field to use to filter by when filtering by archives. Make sure this is the same as the sortBy parameter on the Archivist snippet call.',
  'prop_getarchives.filterprefix_desc' => 'The prefix to use for GET parameters with the Archivist links. Make sure this is the same as the filterPrefix parameter on the Archivist snippet call.',
  'prop_getarchives.toplaceholder_desc' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
  'prop_getarchives.tplodd_desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
  'prop_getarchives.tplfirst_desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
  'prop_getarchives.tpllast_desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
  'prop_getarchives.sortby_desc' => 'Field to sort by. Defaults to publishedon.',
  'prop_getarchives.sortbyalias_desc' => 'Query alias for sortby field. Defaults to an empty string.',
  'prop_getarchives.sortbyescaped_desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
  'prop_getarchives.sortdir_desc' => 'Order which to sort by. Defaults to DESC.',
  'prop_getarchives.limit_desc' => 'Limits the number of resources returned. Defaults to 5.',
  'prop_getarchives.offset_desc' => 'An offset of resources returned by the criteria to skip.',
  'prop_getarchives.tvfilters_desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimeter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
  'prop_getarchives.depth_desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
  'prop_getarchives.parents_desc' => 'Optional. Comma-delimited list of ids serving as parents.',
  'prop_getarchives.includecontent_desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
  'prop_getarchives.includetvs_desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
  'prop_getarchives.processtvs_desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
  'prop_getarchives.tvprefix_desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
  'prop_getarchives.idx_desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
  'prop_getarchives.first_desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
  'prop_getarchives.last_desc' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
  'prop_getarchives.debug_desc' => 'If 1, will send the SQL query to the MODx log. Defaults to false.',
  'prop_getarchives.tagkey_desc' => 'The key to set the tags filter by.',
  'prop_getarchives.tagkeyvar_desc' => 'Optional. Name of the REQUEST param key. If exists in the REQUEST - it overrides tagkey. Setting it to empty - it will disable this override.',
  'prop_getarchives.tagrequestparam_desc' => 'The REQUEST param key being sent that will be the value for the tags filter.',
  'prop_getarchives.tagsearchtype_desc' => 'The type of search to do for the tags.',
  'prop_archivistgrouper.mode_desc' => 'What to group by; either month or year.',
  'prop_archivistgrouper.itemtpl_desc' => 'Name of a Chunk that will be used for each Resource within the month.',
  'prop_archivistgrouper.grouptpl_desc' => 'Name of a Chunk that will be used for each month or year.',
  'prop_archivistgrouper.parents_desc' => 'Optional. Comma-delimited list of ids serving as parents. Will default to the current Resource otherwise.',
  'prop_archivistgrouper.depth_desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
  'prop_archivistgrouper.sortby_desc' => 'Field to sort by. Defaults to publishedon. You should use only date fields.',
  'prop_archivistgrouper.sortdir_desc' => 'Order which to sort by. Defaults to DESC.',
  'prop_archivistgrouper.limitgroups_desc' => 'Limits the number of months/years returned. Defaults to 5.',
  'prop_archivistgrouper.dateformat_desc' => 'Optional. The date format, according to MySQL DATE_FORMAT() syntax, for each row. If blank, Archivist will calculate this automatically.',
  'prop_archivistgrouper.cls_desc' => 'A CSS class to add to each row.',
  'prop_archivistgrouper.altcls_desc' => 'A CSS class to add to each alternate row.',
  'prop_archivistgrouper.firstcls_desc' => 'Optional. A CSS class to add to the first row. If empty will ignore.',
  'prop_archivistgrouper.lastcls_desc' => 'Optional. A CSS class to add to the last row. If empty will ignore.',
  'prop_archivistgrouper.toplaceholder_desc' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
  'prop_archivistgrouper.setlocale_desc' => 'If 1, Archivist will run the setlocale function with your cultureKey setting if your cultureKey is not "en".',
  'prop_archivistgrouper.locale_desc' => 'If this is set and setLocale is 1, will use this value instead of the cultureKey setting to set the locale by.',
  'prop_archivistgrouper.hidecontainers_desc' => 'If 1, will not show Containers in the results.',
  'prop_archivistgrouper.filterprefix_desc' => 'The prefix to use for GET parameters with the Archivist links. Make sure this is the same as the filterPrefix parameter on the getArchives snippet call.',
  'prop_archivistgrouper.usefurls_desc' => 'If true, will generate links in pretty Friendly URL format.',
  'prop_archivistgrouper.persistgetparams_desc' => 'If true, links generated will persist the GET params of the page they are on. Not recommended.',
  'prop_archivistgrouper.extraparams_desc' => 'Optional. If specified, will attach this to the URL of each row.',
  'prop_arc.ascending' => 'Ascending',
  'prop_arc.descending' => 'Descending',
  'prop_arc.month' => 'Month',
  'prop_arc.year' => 'Year',
  'tst_beginswith' => 'Begins With',
  'tst_contains' => 'Contains',
  'tst_endswith' => 'Ends With',
  'tst_exact' => 'Exact',
);