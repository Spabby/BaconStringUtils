<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
return array(
    'description' => 'PowerPC Assembler',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'attn', 'tdlgti', 'tdllti', 'tdeqi', 'tdlgei', 'tdlnli',
                'tdllei', 'tdlngi', 'tdgti', 'tdgei', 'tdnli', 'tdlti', 'tdlei',
                'tdngi', 'tdnei', 'tdi', 'twlgti', 'tlgti', 'twllti', 'tllti',
                'tweqi', 'teqi', 'twlgei', 'tlgei', 'twlnli', 'tlnli', 'twllei',
                'tllei', 'twlngi', 'tlngi', 'twgti', 'tgti', 'twgei', 'tgei',
                'twnli', 'tnli', 'twlti', 'tlti', 'twlei', 'tlei', 'twngi',
                'tngi', 'twnei', 'tnei', 'twi', 'ti', 'macchw', 'macchw.',
                'macchwo', 'macchwo.', 'macchws', 'macchws.', 'macchwso',
                'macchwso.', 'macchwsu', 'macchwsu.', 'macchwsuo', 'macchwsuo.',
                'macchwu', 'macchwu.', 'macchwuo', 'macchwuo.', 'machhw',
                'machhw.', 'machhwo', 'machhwo.', 'machhws', 'machhws.',
                'machhwso', 'machhwso.', 'machhwsu', 'machhwsu.', 'machhwsuo',
                'machhwsuo.', 'machhwu', 'machhwu.', 'machhwuo', 'machhwuo.',
                'maclhw', 'maclhw.', 'maclhwo', 'maclhwo.', 'maclhws',
                'maclhws.', 'maclhwso', 'maclhwso.', 'maclhwsu', 'maclhwsu.',
                'maclhwsuo', 'maclhwsuo.', 'maclhwu', 'maclhwu.', 'maclhwuo',
                'maclhwuo.', 'mulchw', 'mulchw.', 'mulchwu', 'mulchwu.',
                'mulhhw', 'mulhhw.', 'mulhhwu', 'mulhhwu.', 'mullhw', 'mullhw.',
                'mullhwu', 'mullhwu.', 'nmacchw', 'nmacchw.', 'nmacchwo',
                'nmacchwo.', 'nmacchws', 'nmacchws.', 'nmacchwso', 'nmacchwso.',
                'nmachhw', 'nmachhw.', 'nmachhwo', 'nmachhwo.', 'nmachhws',
                'nmachhws.', 'nmachhwso', 'nmachhwso.', 'nmaclhw', 'nmaclhw.',
                'nmaclhwo', 'nmaclhwo.', 'nmaclhws', 'nmaclhws.', 'nmaclhwso',
                'nmaclhwso.', 'mfvscr', 'mtvscr', 'efscfd', 'efdabs', 'efdnabs',
                'efdneg', 'efdadd', 'efdsub', 'efdmul', 'efddiv', 'efdcmpgt',
                'efdcmplt', 'efdcmpeq', 'efdtstgt', 'efdtstlt', 'efdtsteq',
                'efdcfsi', 'efdcfsid', 'efdcfui', 'efdcfuid', 'efdcfsf',
                'efdcfuf', 'efdctsi', 'efdctsidz', 'efdctsiz', 'efdctui',
                'efdctuidz', 'efdctuiz', 'efdctsf', 'efdctuf', 'efdcfs',
                'vaddcuw', 'vaddfp', 'vaddsbs', 'vaddshs', 'vaddsws', 'vaddubm',
                'vaddubs', 'vadduhm', 'vadduhs', 'vadduwm', 'vadduws', 'vand',
                'vandc', 'vavgsb', 'vavgsh', 'vavgsw', 'vavgub', 'vavguh',
                'vavguw', 'vcfsx', 'vcfux', 'vcmpbfp', 'vcmpbfp.', 'vcmpeqfp',
                'vcmpeqfp.', 'vcmpequb', 'vcmpequb.', 'vcmpequh', 'vcmpequh.',
                'vcmpequw', 'vcmpequw.', 'vcmpgefp', 'vcmpgefp.', 'vcmpgtfp',
                'vcmpgtfp.', 'vcmpgtsb', 'vcmpgtsb.', 'vcmpgtsh', 'vcmpgtsh.',
                'vcmpgtsw', 'vcmpgtsw.', 'vcmpgtub', 'vcmpgtub.', 'vcmpgtuh',
                'vcmpgtuh.', 'vcmpgtuw', 'vcmpgtuw.', 'vctsxs', 'vctuxs',
                'vexptefp', 'vlogefp', 'vmaddfp', 'vmaxfp', 'vmaxsb', 'vmaxsh',
                'vmaxsw', 'vmaxub', 'vmaxuh', 'vmaxuw', 'vmhaddshs',
                'vmhraddshs', 'vminfp', 'vminsb', 'vminsh', 'vminsw', 'vminub',
                'vminuh', 'vminuw', 'vmladduhm', 'vmrghb', 'vmrghh', 'vmrghw',
                'vmrglb', 'vmrglh', 'vmrglw', 'vmsummbm', 'vmsumshm',
                'vmsumshs', 'vmsumubm', 'vmsumuhm', 'vmsumuhs', 'vmulesb',
                'vmulesh', 'vmuleub', 'vmuleuh', 'vmulosb', 'vmulosh',
                'vmuloub', 'vmulouh', 'vnmsubfp', 'vnor', 'vor', 'vperm',
                'vpkpx', 'vpkshss', 'vpkshus', 'vpkswss', 'vpkswus', 'vpkuhum',
                'vpkuhus', 'vpkuwum', 'vpkuwus', 'vrefp', 'vrfim', 'vrfin',
                'vrfip', 'vrfiz', 'vrlb', 'vrlh', 'vrlw', 'vrsqrtefp', 'vsel',
                'vsl', 'vslb', 'vsldoi', 'vslh', 'vslo', 'vslw', 'vspltb',
                'vsplth', 'vspltisb', 'vspltish', 'vspltisw', 'vspltw', 'vsr',
                'vsrab', 'vsrah', 'vsraw', 'vsrb', 'vsrh', 'vsro', 'vsrw',
                'vsubcuw', 'vsubfp', 'vsubsbs', 'vsubshs', 'vsubsws', 'vsububm',
                'vsububs', 'vsubuhm', 'vsubuhs', 'vsubuwm', 'vsubuws',
                'vsumsws', 'vsum2sws', 'vsum4sbs', 'vsum4shs', 'vsum4ubs',
                'vupkhpx', 'vupkhsb', 'vupkhsh', 'vupklpx', 'vupklsb',
                'vupklsh', 'vxor', 'evaddw', 'evaddiw', 'evsubfw', 'evsubw',
                'evsubifw', 'evsubiw', 'evabs', 'evneg', 'evextsb', 'evextsh',
                'evrndw', 'evcntlzw', 'evcntlsw', 'brinc', 'evand', 'evandc',
                'evmr', 'evor', 'evorc', 'evxor', 'eveqv', 'evnand', 'evnot',
                'evnor', 'evrlw', 'evrlwi', 'evslw', 'evslwi', 'evsrws',
                'evsrwu', 'evsrwis', 'evsrwiu', 'evsplati', 'evsplatfi',
                'evmergehi', 'evmergelo', 'evmergehilo', 'evmergelohi',
                'evcmpgts', 'evcmpgtu', 'evcmplts', 'evcmpltu', 'evcmpeq',
                'evsel', 'evldd', 'evlddx', 'evldw', 'evldwx', 'evldh',
                'evldhx', 'evlwhe', 'evlwhex', 'evlwhou', 'evlwhoux', 'evlwhos',
                'evlwhosx', 'evlwwsplat', 'evlwwsplatx', 'evlwhsplat',
                'evlwhsplatx', 'evlhhesplat', 'evlhhesplatx', 'evlhhousplat',
                'evlhhousplatx', 'evlhhossplat', 'evlhhossplatx', 'evstdd',
                'evstddx', 'evstdw', 'evstdwx', 'evstdh', 'evstdhx', 'evstwwe',
                'evstwwex', 'evstwwo', 'evstwwox', 'evstwhe', 'evstwhex',
                'evstwho', 'evstwhox', 'evfsabs', 'evfsnabs', 'evfsneg',
                'evfsadd', 'evfssub', 'evfsmul', 'evfsdiv', 'evfscmpgt',
                'evfscmplt', 'evfscmpeq', 'evfststgt', 'evfststlt', 'evfststeq',
                'evfscfui', 'evfsctuiz', 'evfscfsi', 'evfscfuf', 'evfscfsf',
                'evfsctui', 'evfsctsi', 'evfsctsiz', 'evfsctuf', 'evfsctsf',
                'efsabs', 'efsnabs', 'efsneg', 'efsadd', 'efssub', 'efsmul',
                'efsdiv', 'efscmpgt', 'efscmplt', 'efscmpeq', 'efststgt',
                'efststlt', 'efststeq', 'efscfui', 'efsctuiz', 'efscfsi',
                'efscfuf', 'efscfsf', 'efsctui', 'efsctsi', 'efsctsiz',
                'efsctuf', 'efsctsf', 'evmhossf', 'evmhossfa', 'evmhosmf',
                'evmhosmfa', 'evmhosmi', 'evmhosmia', 'evmhoumi', 'evmhoumia',
                'evmhessf', 'evmhessfa', 'evmhesmf', 'evmhesmfa', 'evmhesmi',
                'evmhesmia', 'evmheumi', 'evmheumia', 'evmhossfaaw',
                'evmhossiaaw', 'evmhosmfaaw', 'evmhosmiaaw', 'evmhousiaaw',
                'evmhoumiaaw', 'evmhessfaaw', 'evmhessiaaw', 'evmhesmfaaw',
                'evmhesmiaaw', 'evmheusiaaw', 'evmheumiaaw', 'evmhossfanw',
                'evmhossianw', 'evmhosmfanw', 'evmhosmianw', 'evmhousianw',
                'evmhoumianw', 'evmhessfanw', 'evmhessianw', 'evmhesmfanw',
                'evmhesmianw', 'evmheusianw', 'evmheumianw', 'evmhogsmfaa',
                'evmhogsmiaa', 'evmhogumiaa', 'evmhegsmfaa', 'evmhegsmiaa',
                'evmhegumiaa', 'evmhogsmfan', 'evmhogsmian', 'evmhogumian',
                'evmhegsmfan', 'evmhegsmian', 'evmhegumian', 'evmwhssf',
                'evmwhssfa', 'evmwhsmf', 'evmwhsmfa', 'evmwhsmi', 'evmwhsmia',
                'evmwhumi', 'evmwhumia', 'evmwlumi', 'evmwlumia', 'evmwlssiaaw',
                'evmwlsmiaaw', 'evmwlusiaaw', 'evmwlumiaaw', 'evmwlssianw',
                'evmwlsmianw', 'evmwlusianw', 'evmwlumianw', 'evmwssf',
                'evmwssfa', 'evmwsmf', 'evmwsmfa', 'evmwsmi', 'evmwsmia',
                'evmwumi', 'evmwumia', 'evmwssfaa', 'evmwsmfaa', 'evmwsmiaa',
                'evmwumiaa', 'evmwssfan', 'evmwsmfan', 'evmwsmian', 'evmwumian',
                'evaddssiaaw', 'evaddsmiaaw', 'evaddusiaaw', 'evaddumiaaw',
                'evsubfssiaaw', 'evsubfsmiaaw', 'evsubfusiaaw', 'evsubfumiaaw',
                'evmra', 'evdivws', 'evdivwu', 'mulli', 'muli', 'subfic', 'sfi',
                'dozi', 'bce', 'bcel', 'bcea', 'bcela', 'cmplwi', 'cmpldi',
                'cmpli', 'cmpli', 'cmpwi', 'cmpdi', 'cmpi', 'cmpi', 'addic',
                'ai', 'subic', 'addic.', 'ai.', 'subic.', 'li', 'lil', 'addi',
                'cal', 'subi', 'la', 'lis', 'liu', 'addis', 'cau', 'subis',
                'bdnz-', 'bdnz+', 'bdnz', 'bdn', 'bdnzl-', 'bdnzl+', 'bdnzl',
                'bdnl', 'bdnza-', 'bdnza+', 'bdnza', 'bdna', 'bdnzla-',
                'bdnzla+', 'bdnzla', 'bdnla', 'bdz-', 'bdz+', 'bdz', 'bdzl-',
                'bdzl+', 'bdzl', 'bdza-', 'bdza+', 'bdza', 'bdzla-', 'bdzla+',
                'bdzla', 'blt-', 'blt+', 'blt', 'bltl-', 'bltl+', 'bltl',
                'blta-', 'blta+', 'blta', 'bltla-', 'bltla+', 'bltla', 'bgt-',
                'bgt+', 'bgt', 'bgtl-', 'bgtl+', 'bgtl', 'bgta-', 'bgta+',
                'bgta', 'bgtla-', 'bgtla+', 'bgtla', 'beq-', 'beq+', 'beq',
                'beql-', 'beql+', 'beql', 'beqa-', 'beqa+', 'beqa', 'beqla-',
                'beqla+', 'beqla', 'bso-', 'bso+', 'bso', 'bsol-', 'bsol+',
                'bsol', 'bsoa-', 'bsoa+', 'bsoa', 'bsola-', 'bsola+', 'bsola',
                'bun-', 'bun+', 'bun', 'bunl-', 'bunl+', 'bunl', 'buna-',
                'buna+', 'buna', 'bunla-', 'bunla+', 'bunla', 'bge-', 'bge+',
                'bge', 'bgel-', 'bgel+', 'bgel', 'bgea-', 'bgea+', 'bgea',
                'bgela-', 'bgela+', 'bgela', 'bnl-', 'bnl+', 'bnl', 'bnll-',
                'bnll+', 'bnll', 'bnla-', 'bnla+', 'bnla', 'bnlla-', 'bnlla+',
                'bnlla', 'ble-', 'ble+', 'ble', 'blel-', 'blel+', 'blel',
                'blea-', 'blea+', 'blea', 'blela-', 'blela+', 'blela', 'bng-',
                'bng+', 'bng', 'bngl-', 'bngl+', 'bngl', 'bnga-', 'bnga+',
                'bnga', 'bngla-', 'bngla+', 'bngla', 'bne-', 'bne+', 'bne',
                'bnel-', 'bnel+', 'bnel', 'bnea-', 'bnea+', 'bnea', 'bnela-',
                'bnela+', 'bnela', 'bns-', 'bns+', 'bns', 'bnsl-', 'bnsl+',
                'bnsl', 'bnsa-', 'bnsa+', 'bnsa', 'bnsla-', 'bnsla+', 'bnsla',
                'bnu-', 'bnu+', 'bnu', 'bnul-', 'bnul+', 'bnul', 'bnua-',
                'bnua+', 'bnua', 'bnula-', 'bnula+', 'bnula', 'bdnzt-',
                'bdnzt+', 'bdnzt', 'bdnztl-', 'bdnztl+', 'bdnztl', 'bdnzta-',
                'bdnzta+', 'bdnzta', 'bdnztla-', 'bdnztla+', 'bdnztla',
                'bdnzf-', 'bdnzf+', 'bdnzf', 'bdnzfl-', 'bdnzfl+', 'bdnzfl',
                'bdnzfa-', 'bdnzfa+', 'bdnzfa', 'bdnzfla-', 'bdnzfla+',
                'bdnzfla', 'bt-', 'bt+', 'bt', 'bbt', 'btl-', 'btl+', 'btl',
                'bbtl', 'bta-', 'bta+', 'bta', 'bbta', 'btla-', 'btla+', 'btla',
                'bbtla', 'bf-', 'bf+', 'bf', 'bbf', 'bfl-', 'bfl+', 'bfl',
                'bbfl', 'bfa-', 'bfa+', 'bfa', 'bbfa', 'bfla-', 'bfla+', 'bfla',
                'bbfla', 'bdzt-', 'bdzt+', 'bdzt', 'bdztl-', 'bdztl+', 'bdztl',
                'bdzta-', 'bdzta+', 'bdzta', 'bdztla-', 'bdztla+', 'bdztla',
                'bdzf-', 'bdzf+', 'bdzf', 'bdzfl-', 'bdzfl+', 'bdzfl', 'bdzfa-',
                'bdzfa+', 'bdzfa', 'bdzfla-', 'bdzfla+', 'bdzfla', 'bc-', 'bc+',
                'bc', 'bcl-', 'bcl+', 'bcl', 'bca-', 'bca+', 'bca', 'bcla-',
                'bcla+', 'bcla', 'sc', 'svc', 'svcl', 'svca', 'svcla', 'b',
                'bl', 'ba', 'bla', 'mcrf', 'blr', 'br', 'blrl', 'brl', 'bdnzlr',
                'bdnzlr-', 'bdnzlr-', 'bdnzlr+', 'bdnzlr+', 'bdnzlrl',
                'bdnzlrl-', 'bdnzlrl-', 'bdnzlrl+', 'bdnzlrl+', 'bdzlr',
                'bdzlr-', 'bdzlr-', 'bdzlr+', 'bdzlr+', 'bdzlrl', 'bdzlrl-',
                'bdzlrl-', 'bdzlrl+', 'bdzlrl+', 'bltlr', 'bltlr-', 'bltlr-',
                'bltlr+', 'bltlr+', 'bltr', 'bltlrl', 'bltlrl-', 'bltlrl-',
                'bltlrl+', 'bltlrl+', 'bltrl', 'bgtlr', 'bgtlr-', 'bgtlr-',
                'bgtlr+', 'bgtlr+', 'bgtr', 'bgtlrl', 'bgtlrl-', 'bgtlrl-',
                'bgtlrl+', 'bgtlrl+', 'bgtrl', 'beqlr', 'beqlr-', 'beqlr-',
                'beqlr+', 'beqlr+', 'beqr', 'beqlrl', 'beqlrl-', 'beqlrl-',
                'beqlrl+', 'beqlrl+', 'beqrl', 'bsolr', 'bsolr-', 'bsolr-',
                'bsolr+', 'bsolr+', 'bsor', 'bsolrl', 'bsolrl-', 'bsolrl-',
                'bsolrl+', 'bsolrl+', 'bsorl', 'bunlr', 'bunlr-', 'bunlr-',
                'bunlr+', 'bunlr+', 'bunlrl', 'bunlrl-', 'bunlrl-', 'bunlrl+',
                'bunlrl+', 'bgelr', 'bgelr-', 'bgelr-', 'bgelr+', 'bgelr+',
                'bger', 'bgelrl', 'bgelrl-', 'bgelrl-', 'bgelrl+', 'bgelrl+',
                'bgerl', 'bnllr', 'bnllr-', 'bnllr-', 'bnllr+', 'bnllr+',
                'bnlr', 'bnllrl', 'bnllrl-', 'bnllrl-', 'bnllrl+', 'bnllrl+',
                'bnlrl', 'blelr', 'blelr-', 'blelr-', 'blelr+', 'blelr+',
                'bler', 'blelrl', 'blelrl-', 'blelrl-', 'blelrl+', 'blelrl+',
                'blerl', 'bnglr', 'bnglr-', 'bnglr-', 'bnglr+', 'bnglr+',
                'bngr', 'bnglrl', 'bnglrl-', 'bnglrl-', 'bnglrl+', 'bnglrl+',
                'bngrl', 'bnelr', 'bnelr-', 'bnelr-', 'bnelr+', 'bnelr+',
                'bner', 'bnelrl', 'bnelrl-', 'bnelrl-', 'bnelrl+', 'bnelrl+',
                'bnerl', 'bnslr', 'bnslr-', 'bnslr-', 'bnslr+', 'bnslr+',
                'bnsr', 'bnslrl', 'bnslrl-', 'bnslrl-', 'bnslrl+', 'bnslrl+',
                'bnsrl', 'bnulr', 'bnulr-', 'bnulr-', 'bnulr+', 'bnulr+',
                'bnulrl', 'bnulrl-', 'bnulrl-', 'bnulrl+', 'bnulrl+', 'btlr',
                'btlr-', 'btlr-', 'btlr+', 'btlr+', 'bbtr', 'btlrl', 'btlrl-',
                'btlrl-', 'btlrl+', 'btlrl+', 'bbtrl', 'bflr', 'bflr-', 'bflr-',
                'bflr+', 'bflr+', 'bbfr', 'bflrl', 'bflrl-', 'bflrl-', 'bflrl+',
                'bflrl+', 'bbfrl', 'bdnztlr', 'bdnztlr-', 'bdnztlr+',
                'bdnztlrl', 'bdnztlrl-', 'bdnztlrl+', 'bdnzflr', 'bdnzflr-',
                'bdnzflr+', 'bdnzflrl', 'bdnzflrl-', 'bdnzflrl+', 'bdztlr',
                'bdztlr-', 'bdztlr+', 'bdztlrl', 'bdztlrl-', 'bdztlrl+',
                'bdzflr', 'bdzflr-', 'bdzflr+', 'bdzflrl', 'bdzflrl-',
                'bdzflrl+', 'bclr+', 'bclrl+', 'bclr-', 'bclrl-', 'bclr',
                'bclrl', 'bcr', 'bcrl', 'bclre', 'bclrel', 'rfid', 'crnot',
                'crnor', 'rfmci', 'rfi', 'rfci', 'rfsvc', 'crandc', 'isync',
                'ics', 'crclr', 'crxor', 'crnand', 'crand', 'crset', 'creqv',
                'crorc', 'crmove', 'cror', 'bctr', 'bctrl', 'bltctr', 'bltctr-',
                'bltctr-', 'bltctr+', 'bltctr+', 'bltctrl', 'bltctrl-',
                'bltctrl-', 'bltctrl+', 'bltctrl+', 'bgtctr', 'bgtctr-',
                'bgtctr-', 'bgtctr+', 'bgtctr+', 'bgtctrl', 'bgtctrl-',
                'bgtctrl-', 'bgtctrl+', 'bgtctrl+', 'beqctr', 'beqctr-',
                'beqctr-', 'beqctr+', 'beqctr+', 'beqctrl', 'beqctrl-',
                'beqctrl-', 'beqctrl+', 'beqctrl+', 'bsoctr', 'bsoctr-',
                'bsoctr-', 'bsoctr+', 'bsoctr+', 'bsoctrl', 'bsoctrl-',
                'bsoctrl-', 'bsoctrl+', 'bsoctrl+', 'bunctr', 'bunctr-',
                'bunctr-', 'bunctr+', 'bunctr+', 'bunctrl', 'bunctrl-',
                'bunctrl-', 'bunctrl+', 'bunctrl+', 'bgectr', 'bgectr-',
                'bgectr-', 'bgectr+', 'bgectr+', 'bgectrl', 'bgectrl-',
                'bgectrl-', 'bgectrl+', 'bgectrl+', 'bnlctr', 'bnlctr-',
                'bnlctr-', 'bnlctr+', 'bnlctr+', 'bnlctrl', 'bnlctrl-',
                'bnlctrl-', 'bnlctrl+', 'bnlctrl+', 'blectr', 'blectr-',
                'blectr-', 'blectr+', 'blectr+', 'blectrl', 'blectrl-',
                'blectrl-', 'blectrl+', 'blectrl+', 'bngctr', 'bngctr-',
                'bngctr-', 'bngctr+', 'bngctr+', 'bngctrl', 'bngctrl-',
                'bngctrl-', 'bngctrl+', 'bngctrl+', 'bnectr', 'bnectr-',
                'bnectr-', 'bnectr+', 'bnectr+', 'bnectrl', 'bnectrl-',
                'bnectrl-', 'bnectrl+', 'bnectrl+', 'bnsctr', 'bnsctr-',
                'bnsctr-', 'bnsctr+', 'bnsctr+', 'bnsctrl', 'bnsctrl-',
                'bnsctrl-', 'bnsctrl+', 'bnsctrl+', 'bnuctr', 'bnuctr-',
                'bnuctr-', 'bnuctr+', 'bnuctr+', 'bnuctrl', 'bnuctrl-',
                'bnuctrl-', 'bnuctrl+', 'bnuctrl+', 'btctr', 'btctr-', 'btctr-',
                'btctr+', 'btctr+', 'btctrl', 'btctrl-', 'btctrl-', 'btctrl+',
                'btctrl+', 'bfctr', 'bfctr-', 'bfctr-', 'bfctr+', 'bfctr+',
                'bfctrl', 'bfctrl-', 'bfctrl-', 'bfctrl+', 'bfctrl+', 'bcctr-',
                'bcctr+', 'bcctrl-', 'bcctrl+', 'bcctr', 'bcctrl', 'bcc',
                'bccl', 'bcctre', 'bcctrel', 'rlwimi', 'rlimi', 'rlwimi.',
                'rlimi.', 'rotlwi', 'clrlwi', 'rlwinm', 'rlinm', 'rotlwi.',
                'clrlwi.', 'rlwinm.', 'rlinm.', 'rlmi', 'rlmi.', 'be', 'bel',
                'bea', 'bela', 'rotlw', 'rlwnm', 'rlnm', 'rotlw.', 'rlwnm.',
                'rlnm.', 'nop', 'ori', 'oril', 'oris', 'oriu', 'xori', 'xoril',
                'xoris', 'xoriu', 'andi.', 'andil.', 'andis.', 'andiu.',
                'rotldi', 'clrldi', 'rldicl', 'rotldi.', 'clrldi.', 'rldicl.',
                'rldicr', 'rldicr.', 'rldic', 'rldic.', 'rldimi', 'rldimi.',
                'rotld', 'rldcl', 'rotld.', 'rldcl.', 'rldcr', 'rldcr.', 'cmpw',
                'cmpd', 'cmp', 'cmp', 'twlgt', 'tlgt', 'twllt', 'tllt', 'tweq',
                'teq', 'twlge', 'tlge', 'twlnl', 'tlnl', 'twlle', 'tlle',
                'twlng', 'tlng', 'twgt', 'tgt', 'twge', 'tge', 'twnl', 'tnl',
                'twlt', 'tlt', 'twle', 'tle', 'twng', 'tng', 'twne', 'tne',
                'trap', 'tw', 't', 'subfc', 'sf', 'subc', 'subfc.', 'sf.',
                'subc.', 'subfco', 'sfo', 'subco', 'subfco.', 'sfo.', 'subco.',
                'mulhdu', 'mulhdu.', 'addc', 'a', 'addc.', 'a.', 'addco', 'ao',
                'addco.', 'ao.', 'mulhwu', 'mulhwu.', 'isellt', 'iselgt',
                'iseleq', 'isel', 'mfocrf', 'mfcr', 'mfcr', 'lwarx', 'ldx',
                'icbt', 'icbt', 'lwzx', 'lx', 'slw', 'sl', 'slw.', 'sl.',
                'cntlzw', 'cntlz', 'cntlzw.', 'cntlz.', 'sld', 'sld.', 'and',
                'and.', 'maskg', 'maskg.', 'icbte', 'lwzxe', 'cmplw', 'cmpld',
                'cmpl', 'cmpl', 'subf', 'sub', 'subf.', 'sub.', 'subfo', 'subo',
                'subfo.', 'subo.', 'ldux', 'dcbst', 'lwzux', 'lux', 'dcbste',
                'lwzuxe', 'cntlzd', 'cntlzd.', 'andc', 'andc.', 'tdlgt',
                'tdllt', 'tdeq', 'tdlge', 'tdlnl', 'tdlle', 'tdlng', 'tdgt',
                'tdge', 'tdnl', 'tdlt', 'tdle', 'tdng', 'tdne', 'td', 'mulhd',
                'mulhd.', 'mulhw', 'mulhw.', 'dlmzb', 'dlmzb.', 'mtsrd',
                'mfmsr', 'ldarx', 'dcbf', 'lbzx', 'dcbfe', 'lbzxe', 'neg',
                'neg.', 'nego', 'nego.', 'mul', 'mul.', 'mulo', 'mulo.',
                'mtsrdin', 'clf', 'lbzux', 'not', 'nor', 'not.', 'nor.',
                'lwarxe', 'lbzuxe', 'wrtee', 'dcbtstls', 'subfe', 'sfe',
                'subfe.', 'sfe.', 'subfeo', 'sfeo', 'subfeo.', 'sfeo.', 'adde',
                'ae', 'adde.', 'ae.', 'addeo', 'aeo', 'addeo.', 'aeo.',
                'dcbtstlse', 'mtocrf', 'mtcr', 'mtcrf', 'mtmsr', 'stdx',
                'stwcx.', 'stwx', 'stx', 'stwcxe.', 'stwxe', 'slq', 'slq.',
                'sle', 'sle.', 'wrteei', 'dcbtls', 'dcbtlse', 'mtmsrd', 'stdux',
                'stwux', 'stux', 'sliq', 'sliq.', 'stwuxe', 'subfze', 'sfze',
                'subfze.', 'sfze.', 'subfzeo', 'sfzeo', 'subfzeo.', 'sfzeo.',
                'addze', 'aze', 'addze.', 'aze.', 'addzeo', 'azeo', 'addzeo.',
                'azeo.', 'mtsr', 'stdcx.', 'stbx', 'sllq', 'sllq.', 'sleq',
                'sleq.', 'stbxe', 'icblc', 'subfme', 'sfme', 'subfme.', 'sfme.',
                'subfmeo', 'sfmeo', 'subfmeo.', 'sfmeo.', 'mulld', 'mulld.',
                'mulldo', 'mulldo.', 'addme', 'ame', 'addme.', 'ame.', 'addmeo',
                'ameo', 'addmeo.', 'ameo.', 'mullw', 'muls', 'mullw.', 'muls.',
                'mullwo', 'mulso', 'mullwo.', 'mulso.', 'icblce', 'mtsrin',
                'mtsri', 'dcbtst', 'stbux', 'slliq', 'slliq.', 'dcbtste',
                'stbuxe', 'mfdcrx', 'doz', 'doz.', 'dozo', 'dozo.', 'add',
                'cax', 'add.', 'cax.', 'addo', 'caxo', 'addo.', 'caxo.',
                'tlbiel', 'mfapidi', 'lscbx', 'lscbx.', 'dcbt', 'lhzx', 'eqv',
                'eqv.', 'dcbte', 'lhzxe', 'tlbie', 'tlbi', 'eciwx', 'lhzux',
                'xor', 'xor.', 'lhzuxe', 'mfexisr', 'mfexier', 'mfbr0', 'mfbr1',
                'mfbr2', 'mfbr3', 'mfbr4', 'mfbr5', 'mfbr6', 'mfbr7', 'mfbear',
                'mfbesr', 'mfiocr', 'mfdmacr0', 'mfdmact0', 'mfdmada0',
                'mfdmasa0', 'mfdmacc0', 'mfdmacr1', 'mfdmact1', 'mfdmada1',
                'mfdmasa1', 'mfdmacc1', 'mfdmacr2', 'mfdmact2', 'mfdmada2',
                'mfdmasa2', 'mfdmacc2', 'mfdmacr3', 'mfdmact3', 'mfdmada3',
                'mfdmasa3', 'mfdmacc3', 'mfdmasr', 'mfdcr', 'div', 'div.',
                'divo', 'divo.', 'mfpmr', 'mfmq', 'mfxer', 'mfrtcu', 'mfrtcl',
                'mfdec', 'mfdec', 'mflr', 'mfctr', 'mftid', 'mfdsisr', 'mfdar',
                'mfsdr0', 'mfsdr1', 'mfsrr0', 'mfsrr1', 'mfpid', 'mfpid',
                'mfcsrr0', 'mfcsrr1', 'mfdear', 'mfdear', 'mfesr', 'mfesr',
                'mfivpr', 'mfcmpa', 'mfcmpb', 'mfcmpc', 'mfcmpd', 'mficr',
                'mfder', 'mfcounta', 'mfcountb', 'mfcmpe', 'mfcmpf', 'mfcmpg',
                'mfcmph', 'mflctrl1', 'mflctrl2', 'mfictrl', 'mfbar',
                'mfvrsave', 'mfusprg0', 'mfsprg4', 'mfsprg4', 'mfsprg5',
                'mfsprg5', 'mfsprg6', 'mfsprg6', 'mfsprg7', 'mfsprg7', 'mftb',
                'mftb', 'mftbl', 'mftbl', 'mftbu', 'mftbu', 'mfsprg', 'mfsprg0',
                'mfsprg1', 'mfsprg2', 'mfsprg3', 'mfasr', 'mfear', 'mfpir',
                'mfpvr', 'mfdbsr', 'mfdbsr', 'mfdbcr0', 'mfdbcr0', 'mfdbcr1',
                'mfdbcr1', 'mfdbcr2', 'mfiac1', 'mfiac1', 'mfiac2', 'mfiac2',
                'mfiac3', 'mfiac3', 'mfiac4', 'mfiac4', 'mfdac1', 'mfdac1',
                'mfdac2', 'mfdac2', 'mfdvc1', 'mfdvc1', 'mfdvc2', 'mfdvc2',
                'mftsr', 'mftsr', 'mftcr', 'mftcr', 'mfivor0', 'mfivor1',
                'mfivor2', 'mfivor3', 'mfivor4', 'mfivor5', 'mfivor6',
                'mfivor7', 'mfivor8', 'mfivor9', 'mfivor10', 'mfivor11',
                'mfivor12', 'mfivor13', 'mfivor14', 'mfivor15', 'mfspefscr',
                'mfbbear', 'mfbbtar', 'mfivor32', 'mfivor33', 'mfivor34',
                'mfivor35', 'mfibatu', 'mfibatl', 'mfdbatu', 'mfdbatl',
                'mfic_cst', 'mfic_adr', 'mfic_dat', 'mfdc_cst', 'mfdc_adr',
                'mfmcsrr0', 'mfdc_dat', 'mfmcsrr1', 'mfmcsr', 'mfmcar',
                'mfdpdr', 'mfdpir', 'mfimmr', 'mfmi_ctr', 'mfmi_ap', 'mfmi_epn',
                'mfmi_twc', 'mfmi_rpn', 'mfmd_ctr', 'mfm_casid', 'mfmd_ap',
                'mfmd_epn', 'mfmd_twb', 'mfmd_twc', 'mfmd_rpn', 'mfm_tw',
                'mfmi_dbcam', 'mfmi_dbram0', 'mfmi_dbram1', 'mfmd_dbcam',
                'mfmd_dbram0', 'mfmd_dbram1', 'mfummcr0', 'mfupmc1', 'mfupmc2',
                'mfusia', 'mfummcr1', 'mfupmc3', 'mfupmc4', 'mfzpr', 'mfccr0',
                'mfmmcr0', 'mfpmc1', 'mfsgr', 'mfpmc2', 'mfdcwr', 'mfsia',
                'mfsler', 'mfmmcr1', 'mfsu0r', 'mfpmc3', 'mfpmc4', 'mficdbdr',
                'mfevpr', 'mfcdbcr', 'mfpit', 'mftbhi', 'mftblo', 'mfsrr2',
                'mfsrr3', 'mfl2cr', 'mfdccr', 'mficcr', 'mfictc', 'mfpbl1',
                'mfthrm1', 'mfpbu1', 'mfthrm2', 'mfpbl2', 'mfthrm3', 'mfpbu2',
                'mfspr', 'lwax', 'dst', 'dstt', 'lhax', 'lhaxe', 'dstst',
                'dststt', 'dccci', 'abs', 'abs.', 'abso', 'abso.', 'divs',
                'divs.', 'divso', 'divso.', 'tlbia', 'lwaux', 'lhaux', 'lhauxe',
                'mtdcrx', 'dcblc', 'subfe64', 'subfe64o', 'adde64', 'adde64o',
                'dcblce', 'slbmte', 'sthx', 'lfqx', 'lfqux', 'stfqx', 'stfqux',
                'orc', 'orc.', 'sradi', 'sradi.', 'sthxe', 'slbie', 'ecowx',
                'sthux', 'sthuxe', 'mr', 'or', 'mr.', 'or.', 'mtexisr',
                'mtexier', 'mtbr0', 'mtbr1', 'mtbr2', 'mtbr3', 'mtbr4', 'mtbr5',
                'mtbr6', 'mtbr7', 'mtbear', 'mtbesr', 'mtiocr', 'mtdmacr0',
                'mtdmact0', 'mtdmada0', 'mtdmasa0', 'mtdmacc0', 'mtdmacr1',
                'mtdmact1', 'mtdmada1', 'mtdmasa1', 'mtdmacc1', 'mtdmacr2',
                'mtdmact2', 'mtdmada2', 'mtdmasa2', 'mtdmacc2', 'mtdmacr3',
                'mtdmact3', 'mtdmada3', 'mtdmasa3', 'mtdmacc3', 'mtdmasr',
                'mtdcr', 'subfze64', 'subfze64o', 'divdu', 'divdu.', 'divduo',
                'divduo.', 'addze64', 'addze64o', 'divwu', 'divwu.', 'divwuo',
                'divwuo.', 'mtmq', 'mtxer', 'mtlr', 'mtctr', 'mttid', 'mtdsisr',
                'mtdar', 'mtrtcu', 'mtrtcl', 'mtdec', 'mtsdr0', 'mtsdr1',
                'mtsrr0', 'mtsrr1', 'mtpid', 'mtpid', 'mtdecar', 'mtcsrr0',
                'mtcsrr1', 'mtdear', 'mtdear', 'mtesr', 'mtesr', 'mtivpr',
                'mtcmpa', 'mtcmpb', 'mtcmpc', 'mtcmpd', 'mticr', 'mtder',
                'mtcounta', 'mtcountb', 'mtcmpe', 'mtcmpf', 'mtcmpg', 'mtcmph',
                'mtlctrl1', 'mtlctrl2', 'mtictrl', 'mtbar', 'mtvrsave',
                'mtusprg0', 'mtsprg', 'mtsprg0', 'mtsprg1', 'mtsprg2',
                'mtsprg3', 'mtsprg4', 'mtsprg5', 'mtsprg6', 'mtsprg7', 'mtasr',
                'mtear', 'mttbl', 'mttbu', 'mtdbsr', 'mtdbsr', 'mtdbcr0',
                'mtdbcr0', 'mtdbcr1', 'mtdbcr1', 'mtdbcr2', 'mtiac1', 'mtiac1',
                'mtiac2', 'mtiac2', 'mtiac3', 'mtiac3', 'mtiac4', 'mtiac4',
                'mtdac1', 'mtdac1', 'mtdac2', 'mtdac2', 'mtdvc1', 'mtdvc1',
                'mtdvc2', 'mtdvc2', 'mttsr', 'mttsr', 'mttcr', 'mttcr',
                'mtivor0', 'mtivor1', 'mtivor2', 'mtivor3', 'mtivor4',
                'mtivor5', 'mtivor6', 'mtivor7', 'mtivor8', 'mtivor9',
                'mtivor10', 'mtivor11', 'mtivor12', 'mtivor13', 'mtivor14',
                'mtivor15', 'mtspefscr', 'mtbbear', 'mtbbtar', 'mtivor32',
                'mtivor33', 'mtivor34', 'mtivor35', 'mtibatu', 'mtibatl',
                'mtdbatu', 'mtdbatl', 'mtmcsrr0', 'mtmcsrr1', 'mtmcsr',
                'mtummcr0', 'mtupmc1', 'mtupmc2', 'mtusia', 'mtummcr1',
                'mtupmc3', 'mtupmc4', 'mtzpr', 'mtccr0', 'mtmmcr0', 'mtsgr',
                'mtpmc1', 'mtdcwr', 'mtpmc2', 'mtsler', 'mtsia', 'mtsu0r',
                'mtmmcr1', 'mtpmc3', 'mtpmc4', 'mticdbdr', 'mtevpr', 'mtcdbcr',
                'mtpit', 'mttbhi', 'mttblo', 'mtsrr2', 'mtsrr3', 'mtl2cr',
                'mtdccr', 'mticcr', 'mtictc', 'mtpbl1', 'mtthrm1', 'mtpbu1',
                'mtthrm2', 'mtpbl2', 'mtthrm3', 'mtpbu2', 'mtspr', 'dcbi',
                'nand', 'nand.', 'dcbie', 'dcread', 'mtpmr', 'icbtls', 'nabs',
                'subfme64', 'nabs.', 'nabso', 'subfme64o', 'nabso.', 'divd',
                'divd.', 'divdo', 'divdo.', 'addme64', 'addme64o', 'divw',
                'divw.', 'divwo', 'divwo.', 'icbtlse', 'slbia', 'cli',
                'stdcxe.', 'mcrxr', 'bblels', 'mcrxr64', 'clcs', 'lswx', 'lsx',
                'lwbrx', 'lbrx', 'lfsx', 'srw', 'sr', 'srw.', 'sr.', 'rrib',
                'rrib.', 'srd', 'srd.', 'maskir', 'maskir.', 'lwbrxe', 'lfsxe',
                'bbelr', 'tlbsync', 'lfsux', 'lfsuxe', 'mfsr', 'lswi', 'lsi',
                'lwsync', 'ptesync', 'msync', 'sync', 'dcs', 'lfdx', 'lfdxe',
                'mfsri', 'dclst', 'lfdux', 'lfduxe', 'mfsrin', 'stswx', 'stsx',
                'stwbrx', 'stbrx', 'stfsx', 'srq', 'srq.', 'sre', 'sre.',
                'stwbrxe', 'stfsxe', 'stfsux', 'sriq', 'sriq.', 'stfsuxe',
                'stswi', 'stsi', 'stfdx', 'srlq', 'srlq.', 'sreq', 'sreq.',
                'stfdxe', 'dcba', 'stfdux', 'srliq', 'srliq.', 'dcbae',
                'stfduxe', 'tlbivax', 'tlbivaxe', 'lhbrx', 'sraw', 'sra',
                'sraw.', 'sra.', 'srad', 'srad.', 'lhbrxe', 'ldxe', 'lduxe',
                'rac', 'dss', 'dssall', 'srawi', 'srai', 'srawi.', 'srai.',
                'slbmfev', 'mbar', 'eieio', 'tlbsx', 'tlbsx', 'tlbsx.',
                'tlbsx.', 'tlbsxe', 'tlbsxe.', 'slbmfee', 'sthbrx', 'sraq',
                'sraq.', 'srea', 'srea.', 'extsh', 'exts', 'extsh.', 'exts.',
                'sthbrxe', 'stdxe', 'tlbrehi', 'tlbrelo', 'tlbre', 'tlbre',
                'sraiq', 'sraiq.', 'extsb', 'extsb.', 'stduxe', 'iccci',
                'tlbwehi', 'tlbwelo', 'tlbwe', 'tlbld', 'icbi', 'stfiwx',
                'extsw', 'extsw.', 'icread', 'icbie', 'stfiwxe', 'tlbli',
                'dcbzl', 'dcbz', 'dclz', 'dcbze', 'lvebx', 'lvehx', 'lvewx',
                'lvsl', 'lvsr', 'lvx', 'lvxl', 'stvebx', 'stvehx', 'stvewx',
                'stvx', 'stvxl', 'lwz', 'l', 'lwzu', 'lu', 'lbz', 'lbzu', 'stw',
                'st', 'stwu', 'stu', 'stb', 'stbu', 'lhz', 'lhzu', 'lha',
                'lhau', 'sth', 'sthu', 'lmw', 'lm', 'stmw', 'stm', 'lfs',
                'lfsu', 'lfd', 'lfdu', 'stfs', 'stfsu', 'stfd', 'stfdu', 'lq',
                'lfq', 'lfqu', 'lbze', 'lbzue', 'lhze', 'lhzue', 'lhae',
                'lhaue', 'lwze', 'lwzue', 'stbe', 'stbue', 'sthe', 'sthue',
                'stwe', 'stwue', 'ld', 'ldu', 'lwa', 'fdivs', 'fdivs.', 'fsubs',
                'fsubs.', 'fadds', 'fadds.', 'fsqrts', 'fsqrts.', 'fres',
                'fres.', 'fmuls', 'fmuls.', 'fmsubs', 'fmsubs.', 'fmadds',
                'fmadds.', 'fnmsubs', 'fnmsubs.', 'fnmadds', 'fnmadds.', 'stfq',
                'stfqu', 'lde', 'ldue', 'lfse', 'lfsue', 'lfde', 'lfdue',
                'stde', 'stdue', 'stfse', 'stfsue', 'stfde', 'stfdue', 'std',
                'stdu', 'stq', 'fcmpu', 'frsp', 'frsp.', 'fctiw', 'fcir',
                'fctiw.', 'fcir.', 'fctiwz', 'fcirz', 'fctiwz.', 'fcirz.',
                'fdiv', 'fd', 'fdiv.', 'fd.', 'fsub', 'fs', 'fsub.', 'fs.',
                'fadd', 'fa', 'fadd.', 'fa.', 'fsqrt', 'fsqrt.', 'fsel',
                'fsel.', 'fmul', 'fm', 'fmul.', 'fm.', 'frsqrte', 'frsqrte.',
                'fmsub', 'fms', 'fmsub.', 'fms.', 'fmadd', 'fma', 'fmadd.',
                'fma.', 'fnmsub', 'fnms', 'fnmsub.', 'fnms.', 'fnmadd', 'fnma',
                'fnmadd.', 'fnma.', 'fcmpo', 'mtfsb1', 'mtfsb1.', 'fneg',
                'fneg.', 'mcrfs', 'mtfsb0', 'mtfsb0.', 'fmr', 'fmr.', 'mtfsfi',
                'mtfsfi.', 'fnabs', 'fnabs.', 'fabs', 'fabs.', 'mffs', 'mffs.',
                'mtfsf', 'mtfsf.', 'fctid', 'fctid.', 'fctidz', 'fctidz.',
                'fcfid', 'fcfid.', 'extldi', 'extldi.', 'extrdi	', 'extrdi.',
                'insrdi', 'insrdi.', 'rotrdi', 'rotrdi.', 'sldi', 'sldi.',
                'srdi', 'srdi.', 'clrrdi', 'clrrdi.', 'clrlsldi', 'clrlsldi.',
                'extlwi', 'extlwi.', 'extrwi', 'extrwi.', 'inslwi', 'inslwi.',
                'insrwi', 'insrwi.', 'rotrwi', 'rotrwi.', 'slwi', 'sli',
                'slwi.', 'sli.', 'srwi', 'sri', 'srwi.', 'sri.', 'clrrwi',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'r0', 'r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9',
                'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16', 'r17', 'r18',
                'r19', 'r20', 'r21', 'r22', 'r23', 'r24', 'r25', 'r26', 'r27',
                'r28', 'r29', 'r30', 'r31', 'f0', 'f1', 'f2', 'f3', 'f4', 'f5',
                'f6', 'f7', 'f8', 'f9', 'f10', 'f11', 'f12', 'f13', 'f14',
                'f15', 'f16', 'f17', 'f18', 'f19', 'f20', 'f21', 'f22', 'f23',
                'f24', 'f25', 'f26', 'f27', 'f28', 'f29', 'f30', 'f31', 'cr',
                'cr0', 'cr1', 'fpscr', 'xer', 'lr', 'ctr', 'tbl', 'tbh', 'hid0',
                'hid1', 'hid2', 'sprg0', 'sprg1', 'sprg2', 'sprg3', 'sprg4',
                'sprg5', 'sprg6', 'sprg7', 'ibat0u', 'ibat0l', 'ibat1u',
                'ibat1l', 'ibat2u', 'ibat2l', 'ibat3u', 'ibat3l', 'ibat4u',
                'ibat4l', 'ibat5u', 'ibat5l', 'ibat6u', 'ibat6l', 'ibat7u',
                'ibat7l', 'dbat0u', 'dbat0l', 'dbat1u', 'dbat1ldbat2u',
                'dbat2l', 'dbat3u', 'dbat3l', 'dbat4u', 'dbat4l', 'dbat5u',
                'dbat5l', 'dbat6u', 'dbat6l', 'dbat7u', 'dbat7l', 'csrr0',
                'csrr1', 'msr', 'mbar', 'dsisr', 'srr0', 'srr1', 'dar', 'iabr',
                'iabr1', 'dabr', 'dabr2', 'svr', 'pvr', 'dmis', 'dcmp', 'hash1',
                'hash2', 'imiss', 'icmp', 'rpa', 'sdr1', 'sr0', 'sr2', 'sr3',
                'sr4', 'sr5', 'sr6', 'sr7', 'sr8', 'sr9', 'sr10', 'sr11',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '#',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'pre_processor' => array(
        'prefix' => '\\.',
    ),
    'identifiers' => '[a-zA-Z_]\\w*[\\.\\+\\-]?',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'enable_indentation' => true,
    'ignore_case' => true,
);
