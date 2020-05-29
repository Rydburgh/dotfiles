let mapleader =","
call plug#begin(system('echo -n "${XDG_CONFIG_HOME:-$HOME/.config}/nvim/plugged"'))
Plug 'lervag/vimtex'
Plug 'vimwiki/vimwiki'
Plug 'jreybert/vimagit'
Plug 'ap/vim-css-color'
Plug 'junegunn/goyo.vim'
Plug 'honza/vim-snippets'
Plug 'tpope/vim-surround'
Plug 'preservim/nerdtree'
Plug 'justinmk/vim-sneak'
Plug 'kovetskiy/sxhkd-vim'
Plug 'tpope/vim-commentary'
Plug 'vim-airline/vim-airline'
Plug 'ThePrimeagen/vim-be-good'
Plug 'KeitaNakamura/tex-conceal.vim'
Plug 'vim-airline/vim-airline-themes'
Plug 'https://github.com/SirVer/ultisnips.git'
"Plug 'PotatoesMaster/i3-vim-syntax'
"Plug 'lukesmithxyz/vimling'
call plug#end()
	set nocompatible
	set hidden
	set smarttab
	set number relativenumber
	set bg=light
	set smartindent
	set autoindent
	set laststatus=0
	set clipboard+=unnamedplus
	set backspace=indent,eol,start
	set tabstop=4 shiftwidth=4
	set splitbelow splitright
	set encoding=utf-8
	set nohlsearch
	set mouse=a
	set go=a
	syntax enable
	nnoremap c "_c
	filetype plugin on
	set nowrap

"------------------------------=+  Leader Maps  +=-----------------------------"
" Quickly close by jamming w+q
	inoremap wq <Esc>:wq<CR>
	nnoremap wq :wq<CR>
	inoremap qw <Esc>:wq<CR>
	nnoremap qw :wq<CR>

" Spell-check set to <leader>o, 'o' for 'orthography' and C-o corrects last error
	map <leader>o :setlocal spell! spelllang=en_us<CR>

" Nerd tree
	map <leader>n :NERDTreeToggle<CR>
	autocmd bufenter * if (winnr("$") == 1 && exists("b:NERDTree") && b:NERDTree.isTabTree()) | q | endif

" Open my bibliography file in split
	map <leader>b :vsp<space>$BIB<CR>
	map <leader>r :vsp<space>$REFER<CR>

" Compile document, be it groff/LaTeX/markdown/etc.
	map <leader>c :w! \| !compiler <c-r>%<CR>

" Open corresponding .pdf/.html or preview
	map <leader>p :!opout <c-r>%<CR><CR>

" Open VimWiki
	map <leader>v :VimwikiIndex

" Goyo plugin makes text more readable when writing prose
	map <leader>f :Goyo \| set bg=light \| set linebreak<CR>
	let g:goyo_width = 120

" Format LaTeX lectures for master view <leader>l, or single view <leader>L,
" 'l' for 'length'

	map <leader>l :g/%%%/norm j0d$k$p0<CR>
	map <leader>L :g/%%%/norm 3ld$jp<CR>


"-------------------------------=+ Other Maps +=------------------------------"
" Airline theme
	let g:airline_theme='biogoo'
" Stop highlighting _
	let g:tex_no_error=1
" Jump to next markter in templates
	noremap <space><space> <esc>/<++><Enter>"_c4l
" Make the 81st column stand out:
"	highlight ColorColumn ctermbg=lightgrey
"	call matchadd('ColorColumn','\%81v',100)
" Enable autocompletion:
	set wildmode=longest,list,full
" Disables automatic commenting on newline:
	autocmd FileType * setlocal formatoptions-=c formatoptions-=r formatoptions-=o
" Shortcutting split navigation, saving a keypress:
	map <C-h> <C-w>h
	map <C-j> <C-w>j
" Easily move lines up and down
	imap <C-K> <Esc>:m-2<CR>i
	imap <C-J> <Esc>:m+<CR>i
	map <C-K> :m-2<CR>
	map <C-J> :m+1<CR>
" Replace ex mode with gq
	map Q gq
" Replace all is aliased to S.
	nnoremap S :%s//g<Left><Left>
" Runs a script that cleans out tex build files whenever I close out of a .tex file.
	autocmd VimLeave *.tex !texclear %
" Ensure files are read as what I want:
	let g:vimwiki_ext2syntax = {'.Rmd': 'markdown', '.rmd': 'markdown','.md': 'markdown', '.markdown': 'markdown', '.mdown': 'markdown'}
	let g:vimwiki_list = [{'path': '~/vimwiki', 'syntax': 'markdown', 'ext': '.md'}]
	autocmd BufRead,BufNewFile /tmp/calcurse*,~/.calcurse/notes/* set filetype=markdown
	autocmd BufRead,BufNewFile *.ms,*.me,*.mom,*.man set filetype=groff
	autocmd BufRead,BufNewFile *.tex set filetype=tex
" Save file as sudo on files that require root permission
	cnoremap w!! execute 'silent! write !sudo tee % >/dev/null' <bar> edit!
" Enable Goyo by default for mutt writting
	autocmd BufRead,BufNewFile /tmp/neomutt* let g:goyo_width=80
	autocmd BufRead,BufNewFile /tmp/neomutt* :Goyo | set bg=light
	autocmd BufRead,BufNewFile /tmp/neomutt* map ZZ :Goyo\|x!<CR>
	autocmd BufRead,BufNewFile /tmp/neomutt* map ZQ :Goyo\|q!<CR>
" Automatically deletes all trailing whitespace and newlines at end of file on save.
	autocmd BufWritePre * %s/\s\+$//e
	autocmd BufWritepre * %s/\n\+\%$//e
" When shortcut files are updated, renew bash and ranger configs with new material:
	autocmd BufWritePost files,directories !shortcuts
" Run xrdb whenever Xdefaults or Xresources are updated.
	autocmd BufWritePost *Xresources,*Xdefaults !xrdb %
" Update binds when sxhkdrc is updated.
	autocmd BufWritePost *sxhkdrc !pkill -USR1 sxhkd
" Turns off highlighting on the bits of code that are changed, so the line that is changed is
" highlighted but the actual text that has changed stands out on the line and is readable.
if &diff
	highlight! link DiffText MatchParen
endif
"--------------------------------=+ UltiSnips +=-------------------------------"
	let g:UltiSnipsSnippetDir="/home/j/.config/nvim/plugged/ultisnips/"
	let g:UltiSnipsSnippetDirectories= ["UltiSnips"]
	let g:UltiSnipsExpandTrigger="<M-Space>" "AKA Alt-Space
	let g:UltiSnipsJumpForwardTrigger="<tab>"
	let g:UltiSnipsJumpBackwardTrigger="<M-tab>"
	let g:UltiSnipsEditSplit="horizontal"
	cnoremap :: UltiSnipsEdit<CR>
"-------------------------------=+ Tex-Conceal +=------------------------------"
	set conceallevel=2
	let g:tex_conceal="abdgm"
"-------------------------------=+ Vim-Sneak +=--------------------------------"
let g:sneak#label = 1
map f <Plug>Sneak_s
map F <Plug>Sneak_S
map gS <Plug>Sneak_,
map gs <Plug>Sneak_;
highlight Sneak guifg=black guibg=#00C7DF ctermfg=black ctermbg=cyan
highlight SneakScope guifg=yellow ctermfg=red ctermbg=yellow
let g:sneak#prompt = '🎆'
"----------------------------=+ Inkscape-Figures +=----------------------------"
inoremap <C-f> <Esc>: silent exec '.!inkscape-figures create "'.getline('.').'" "'.b:vimtex.root.'/figures/"'<CR><CR>:w<CR>
nnoremap <C-f> : silent exec '!inkscape-figures edit "'.b:vimtex.root.'/figures/" > /dev/null 2>&1 &'<CR><CR>:redraw!<CR>
